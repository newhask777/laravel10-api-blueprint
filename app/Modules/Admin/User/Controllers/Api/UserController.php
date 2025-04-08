<?php

namespace App\Modules\Admin\User\Controllers\Api;

use App\Modules\Admin\User\Models\User;
use App\Modules\Admin\User\Requests\UserRequest;
use App\Modules\Admin\User\Services\UserServise;
use App\Services\Response\ResponseServise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $service;


    public function __construct(UserServise $service)
    {
//        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $this->authorize('view', new User());

        $users = $this->service->getUsers();
        //dd($users->toArray());

        return ResponseServise::sendJsonResponse(true, 200, [
            'users' => $users->toArray()
        ]);
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
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function store(UserRequest $request)
    {
        $user = $this->service->save($request, new User());

        return ResponseServise::sendJsonResponse(true, 200, [
            'user' => $user->toArray()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\User\Models\User  $user
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function show(User $user)
    {
        return ResponseServise::sendJsonResponse(true, 200, [
            'user' => $user->toArray()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\User\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Admin\User\Models\User  $user
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $user = $this->service->save($request, $user);
        return ResponseServise::sendJsonResponse(true, 200,[],[
            'user' =>  $user->toArray()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Admin\User\Models\User  $user
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse
     */
    public function destroy(User $user)
    {
//        $this->service->delete($request, $user);
        $user->status = '0';
        $user->update();
        return ResponseServise::sendJsonResponse(true, 200,[],[
            'message' => "User inactivated successfully",
            'user' => $user->toArray()
        ]);
    }


    public function usersForm(User $user)
    {
        $this->authorize('view', $user);

        $users = $this->service->getUsers(1);

        return ResponseServise::sendJsonResponse(true, 200, [
            'users' => $users->toArray()
        ]);
    }
}
