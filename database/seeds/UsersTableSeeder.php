<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAl = DB::table('users')->insert([
            'name' => 'Alex',
            'email' => 'alex@ya.ru',
            'password' => bcrypt('alex')
        ]);

        $userEl = DB::table('users')->insert([
            'name' => 'Elbek',
            'email' => 'elbek@ya.ru',
            'password' => bcrypt('elbek')
        ]);

        $userPl = DB::table('users')->insert([
            'name' => 'Paul',
            'email' => 'paul@ya.ru',
            'password' => bcrypt('paul')
        ]);

        $userVi = DB::table('users')->insert([
            'name' => 'Vitya',
            'email' => 'vitya@ya.ru',
            'password' => 'vitya'
        ]);

        $userVo = DB::table('users')->insert([
            'name' => 'Vova',
            'email' => 'vova@ya.ru',
            'password' => 'vova'
        ]);
    }
}
