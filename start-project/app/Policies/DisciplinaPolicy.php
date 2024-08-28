<?php

namespace App\Policies;

use App\Http\Controllers\PermissionController;
use App\Models\User;

class DisciplinaPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }


    public function index() {
        return PermissionController::isAuthorized('disciplina.index');
    }

    public function create() {
        return PermissionController::isAuthorized('disciplina.create');
    }
    public function edit() {
        return PermissionController::isAuthorized('disciplina.edit');
    }
    public function show() {
        return PermissionController::isAuthorized('disciplina.show');
    }
    public function destroy() {
        return PermissionController::isAuthorized('disciplina.destroy');
    }
}
