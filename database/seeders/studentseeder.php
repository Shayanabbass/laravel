<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $json=File::get('database/json/students.json');
        // $students=collect(json_decode($json));
        // // $students=collect(
        // //     [
        // //         ['name'=>'shayan',
        // //         'email'=>'shayanabbas20081@gmail.com'
        // //     ],
        // //         [
        // //             'name'=>'hasan',
        // //         'email'=>'hasan@gmail.com'

        // //         ]
        // //     ]
        // //     );
        //     $students->each(function($student){
        //         // student::insert($student);
        //         student::create([
        //                 'name'=>$student->name,
        //                 'email'=>$student->email
            
        //             ]);
        //     });
        // student::create([
        //     'name'=>('Ali abbas'),
        //     'email'=>('ali@gmail.com ')

        // ]);
    }
}
