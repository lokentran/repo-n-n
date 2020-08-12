<?php 

namespace App\Http\Repositories;
use App\Models\User;

class UserRepo {
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll() {
        return $this->user->all();
    }

    public function save($user) {
        $user->save();
    }

    public function delete($user) {
        $user->delete();
    }

    public function findById($id) {
        return $this->user->findOrFail($id);
    }
}