<?php

namespace App\Policies;

use App\Enums\UserRolesEnum;
use App\Models\StreetData;
use App\Models\User;

class StreetDataPolicy
{
    public function before(User $user, string $ability){
        return $user->isUpline();
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, StreetData $streetData): bool
    {
        return $user->id === $streetData->creator->id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, StreetData $streetData): bool
    {
        return $user->id === $streetData->creator_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, StreetData $streetData): bool
    {
        return $user->id === $streetData->creator_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, StreetData $streetData): bool
    {
        return $user->id === $streetData->creator_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, StreetData $streetData): bool
    {
        return $user->id === $streetData->creator_id;
    }
}
