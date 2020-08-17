<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(20)->create();

        $user = User::find(1);
        $user->name = 'wheater';
        $user->email = 'wheat_yuan@163.com';
        $user->is_admin = true;
        $user->save();
    }
}
