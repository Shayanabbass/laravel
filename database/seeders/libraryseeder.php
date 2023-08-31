<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\library;
use GuzzleHttp\Promise\Create;

class libraryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // library::create([
        //     'stu_id'=>'1',
        //     'book'=>'blackbeauty',
        //     'date_issue'=>' 2023-08-26 13:21:12',
        //     'status'=>'1'


        // ]);
        for ($i=0; $i <10 ; $i++) { 
            library::create([
                'stu_id'=>'1',
                'book'=>fake()->name(),
                'date_issue'=>' 2023-08-26 13:21:12',
                'status'=>'1'


            ]);
            # code...
        }
    }
}
