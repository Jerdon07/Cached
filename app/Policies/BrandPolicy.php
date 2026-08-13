<?php

namespace App\Policies;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BrandPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view_any_categories');
    }

    public function view(User $user, Brand $brand): bool
    {
        return $user->hasPermissionTo('view_categories');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create_categories');
    }

    public function update(User $user, Brand $brand): bool
    {
        return $user->hasPermissionTo('update_categories');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete_any_categories');
    }

    public function delete(User $user, Brand $brand): bool
    {
        return $user->hasPermissionTo('delete_categories');
    }

    public function restoreAny(User $user): bool
    {
        return $user->hasPermissionTo('restore_any_categories');
    }

    public function restore(User $user, Brand $brand): bool
    {
        return $user->hasPermissionTo('restore_categories');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->hasPermissionTo('force_delete_any_categories');
    }

    public function forceDelete(User $user, Brand $brand): bool
    {
        return $user->hasPermissionTo('force_delete_categories');
    }
}
