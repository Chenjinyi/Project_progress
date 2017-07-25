<?php

namespace App\Policies;

use App\User;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function update(User $user,Project $project){
        return $user->id == $project->user_id;
    }
    public  function delete(User $user,Project $project){
        return $user->id == $project->user_id;
    }
}
