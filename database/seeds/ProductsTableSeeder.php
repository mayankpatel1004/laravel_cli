<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => "Hard Disk",
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'amount' => '12',
            'status' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => "Pen Drive 64 GB",
            'description' => "Pendrive. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'amount' => '8',
            'status' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => "San Disk 32 GB",
            'description' => "San Disk. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'amount' => '6',
            'status' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => "RAM 4GB DDR3",
            'description' => "RAM 4GB. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'amount' => '12',
            'status' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => "External SSD",
            'description' => "256 GB. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'amount' => '20',
            'status' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => "Mouse",
            'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'amount' => '4',
            'status' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => "Keyboard",
            'description' => "Keyboard. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'amount' => '3',
            'status' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => "Monitor 18 Inch",
            'description' => "Monitor 18 Inch. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'amount' => '30',
            'status' => '1'
        ]);
    }
}
