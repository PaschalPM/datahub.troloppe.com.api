<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\UserRolesEnum;
use App\Notifications\ResetPasswordNotification;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getUserData()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "roles" => $this->roles()->get(['name'])->map(fn($role) => $role->name)
        ];
    }

    public function sendPasswordResetNotification($token)
    {
        $clientBaseUrl = app()->environment('production') ? request()->getHost() : 'http://localhost:4200';
        $url = $clientBaseUrl . '/reset-password?token=' . $token;

        $this->notify(new ResetPasswordNotification($this->name, $url));
    }

    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return str_ends_with($this->email, '@troloppe.com');
    }
    public static function booted()
    {
        static::created(function (User $user) {
            $user->assignRole(UserRolesEnum::RESEARCH_STAFF->value);
        });
    }

    public function streetData(): HasMany
    {
        return $this->hasMany(StreetData::class);
    }

    public function isUpline(): bool
    {
        return $this->hasAnyRole([UserRolesEnum::RESEARCH_MANAGER->value, UserRolesEnum::ADMIN->value]);
    }
}
