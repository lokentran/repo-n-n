<?php 

namespace App\Http\Services;
use App\Http\Repositories\UserRepo;
use App\Models\User;

class UserService {
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAll() {
        return $this->userRepo->getAll();
    }

    public function add($request) {
        $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        $user->fill($request->all());
        $this->userRepo->save($user);
        $user->roles()->sync($request->role);
        
    }
 
    public function findById($id) {
        return $this->userRepo->findById($id);
    }

    public function edit($request,$id) {
        $user = $this->userRepo->findById($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles()->sync($request->role);
        $this->userRepo->save($user);
    }

    public function delete($id) {
        $user = $this->userRepo->findById($id);
        $user->roles()->detach();
        $this->userRepo->delete($user);
    }

}

