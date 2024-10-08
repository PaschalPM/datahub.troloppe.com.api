<?php

namespace App\Models;

use App\Facades\ImageUploaderFacade;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StreetData extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'is_verified' => 'boolean'
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
    public function sector(): BelongsTo
    {
        return $this->belongsTo(Sector::class);
    }
    public function subSector(): BelongsTo
    {
        return $this->belongsTo(SubSector::class);
    }

    protected static function booted()
    {
        static::deleted(function ($model) {
            ImageUploaderFacade::deleteImage($model->image_path, ImageUploaderFacade::STREET_DATA_DISK_NAME);
        });
    }
}
