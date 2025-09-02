<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Count;
use Illuminate\Auth\Access\HandlesAuthorization;

class CountPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_counts::count');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Count $count): bool
    {
        return $user->can('view_counts::count');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_counts::count');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Count $count): bool
    {
        return $user->can('update_counts::count');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Count $count): bool
    {
        return $user->can('delete_counts::count');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_counts::count');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Count $count): bool
    {
        return $user->can('force_delete_counts::count');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_counts::count');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Count $count): bool
    {
        return $user->can('restore_counts::count');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_counts::count');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Count $count): bool
    {
        return $user->can('replicate_counts::count');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_counts::count');
    }
}
