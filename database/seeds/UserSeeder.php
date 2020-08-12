<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Nguyen Van Luc';
        $user->email = 'vanluc@gmail.com';
        $user->save();

        $user = new User();
        $user->name = 'Bui Xuan Duong';
        $user->email = 'xuanduong@gmail.com';
        $user->save();

        $user = new User();
        $user->name = 'Duong Manh Cuong';
        $user->email = 'manhcuong@gmail.com';
        $user->save();

    }
}
