<?php

namespace Database\Seeders;

use App\Models\Stories;
use Illuminate\Database\Seeder;

class StoriesSeeder extends Seeder
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
                'name'=>'Phàm nhân tu tiên',
                'avatar'=>'https://www.nae.vn/ttv/ttv/public/images/story/2de44ae0ec90c1a186b2fe0add591a9723db36c15f875b4a69966baf0c29b7b0.jpg',
                'author'=>'Vong Ngữ',
                'category'=>'Tiên hiệp',
                'description'=>'Hay',
                'status'=>2,
                'comment'=>'Hay',
                'evaluate'=>5,
                'created_at'=>now()
            ],
            [
                'id'=>2,
                'name'=>'Phàm nhân tu tiên 2',
                'avatar'=>'https://www.nae.vn/ttv/ttv/public/images/story/2de44ae0ec90c1a186b2fe0add591a9723db36c15f875b4a69966baf0c29b7b0.jpg',
                'author'=>'Vong Ngữ',
                'category'=>'Tiên hiệp',
                'description'=>'Hay',
                'status'=>2,
                'comment'=>'Hay',
                'evaluate'=>5,
                'created_at'=>now()
            ],
        ];
        Stories::insert($data);
    }
}
