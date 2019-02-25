<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        [
            DB::table('tasks')->insert([
                'name'=> 'Tran Ngoc Khanh',
                'phone'=> 0123456444,
                'email' => 'khanh@gmail.com'
            ]),

            DB::table('tasks')->insert([
                'name'=> 'Tran van Huy',
                'phone'=> 0123456444,
                'email' => 'huy@gmail.com'
            ]),

            DB::table('tasks')->insert([
                'name'=> 'Tran van Nghia',
                'phone'=> 0123456444,
                'email' => 'nghia@gmail.com'
            ])
        ];

    }
}
