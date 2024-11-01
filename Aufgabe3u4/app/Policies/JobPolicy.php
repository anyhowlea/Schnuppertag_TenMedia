<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true; // Jeder User kann Jobs sehen
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Job $job): bool
    {
        return true; // Jeder User kann bestimmte Jobs sehen
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
         return $user->role === 'admin'; // Nur Admins können Jobs erstellen
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Job $job): bool
    {
        return $user->role === 'admin'; // Nur Admins können Jobs bearbeiten
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Job $job): bool
    {
         return $user->role === 'admin'; // Nur Admins können Jobs löschen
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Job $job): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Job $job): bool
    {
        //
    }
}
