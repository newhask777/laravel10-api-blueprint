<?php

namespace App\Modules\Admin\Role\Controllers;

use App\Modules\Admin\Dashboard\Classes\Base;
use App\Modules\Admin\Role\Models\Permission;
use App\Modules\Admin\Role\Models\Role;
use App\Modules\Admin\Role\Services\PermissionService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PermissionsController extends Base
{
    /**
     * RoleController constructor.
     */
    public function __construct(PermissionService $permService)
    {
        parent::__construct();
        $this->service = $permService;
    }

    /**
     * Display a listing of the resource.
     *
     * */
    public function index()
    {
        $this->authorize('view', Role::class);

        $perms = Permission::all();
        $roles = Role::all();

//        dd($roles);

        $this->title = "Title Perm Index";

        $this->content = view('Admin::Permission.index')->
        with([
            'perms' => $perms,
            'roles' => $roles,
            'title' => $this->title,
        ])->
        render();

        return $this->renderOutput();
    }

    /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->authorize('create', Role::class);

        $this->service->save($request);

        return  back()->with([
            'message' => __('Success')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\Role\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\Role\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Admin\Role\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Admin\Role\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
