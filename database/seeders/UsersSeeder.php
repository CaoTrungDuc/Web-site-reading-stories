<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'id'=>1,
                'name'=>'lyt996',
                'email'=>'anhcomql123@gmail.com',
                'password'=>'nhuvay123',
                'role'=>1,
                'created_at'=>now()
            ],
            [
                'id'=>2,
                'name'=>'comql',
                'email'=>'anhcomql12345@gmail.com',
                'password'=>'nhuvay12345',
                'role'=>2,
                'created_at'=>now()
            ],
            [
                'id'=>3,
                'name'=>'saudoi9x',
                'email'=>'caotrungduc1999@gmail.com',
                'password'=>'nhuvay123',
                'role'=>2,
                'created_at'=>now()
            ],
        ];
        User::insert($data);
    }
}
