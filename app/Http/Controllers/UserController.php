<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Models\Role;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAll() {
        $users = $this->userService->getAll();
        // dd($users->all());
        return view('user.list', compact('users'));
    }
    
    public function showFormAdd() {
        $roles = Role::all();
        return view('user.add', compact('roles'));
    }

    public function add(Request $request) {
        
        $this->userService->add($request);
        return redirect()->route('user.all');
    }

    public function showFormEdit($id) {
        $user = $this->userService->findById($id);
        $roles = Role::all();
        return view('user.edit', compact('user','roles','id'));
    }

    public function edit(Request $request,$id) {
        $this->userService->edit($request,$id);
        return redirect()->route('user.all');
    }
    
    public function delete($id) {
        $this->userService->delete($id);
        return redirect()->route('user.all');
    }

}
