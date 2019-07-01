<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'title' => 'size',
                'value' => '5.5',
            ],
            [
                'title' => 'size',
                'value' => '6.0',
            ],
            [
                'title' => 'size',
                'value' => '6.5',
            ],
            [
                'title' => 'size',
                'value' => '7.0',
            ],
            [
                'title' => 'size',
                'value' => '7.5',
            ],
            [
                'title' => 'size',
                'value' => '8.0',
            ],
            [
                'title' => 'size',
                'value' => '8.5',
            ],
            [
                'title' => 'size',
                'value' => '9.0',
            ],
            [
                'title' => 'size',
                'value' => '9.5',
            ],
            [
                'title' => 'size',
                'value' => '10.0',
            ],
            [
                'title' => 'size',
                'value' => '10.5',
            ],
            [
                'title' => 'size',
                'value' => '11.0',
            ],
            [
                'title' => 'size',
                'value' => '11.5',
            ],
            [
                'title' => 'size',
                'value' => '12.0',
            ],
            [
                'title' => 'size',
                'value' => '12.5',
            ],
            [
                'title' => 'size',
                'value' => '13.0',
            ],
            [
                'title' => 'color',
                'value' => 'blue',
            ],
            [
                'title' => 'color',
                'value' => 'red',
            ],
            [
                'title' => 'color',
                'value' => 'green',
            ],
            [
                'title' => 'color',
                'value' => 'black',
            ],
            [
                'title' => 'color',
                'value' => 'orange',
            ],
            [
                'title' => 'color',
                'value' => 'grey',
            ],
            [
                'title' => 'color',
                'value' => 'pink',
            ],
        ];
        DB::table('categories')->insert($data);
    }
}
