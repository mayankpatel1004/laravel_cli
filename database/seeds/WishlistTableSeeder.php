<?php

use Illuminate\Database\Seeder;

class WishlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wishlists')->insert([
            'product_id' => "1",
            'user_id' => "1",
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
        DB::table('wishlists')->insert([
            'product_id' => "2",
            'user_id' => "1",
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
        DB::table('wishlists')->insert([
            'product_id' => "3",
            'user_id' => "1",
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
        DB::table('wishlists')->insert([
            'product_id' => "4",
            'user_id' => "1",
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);

        DB::table('wishlists')->insert([
            'product_id' => "5",
            'user_id' => "2",
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
        DB::table('wishlists')->insert([
            'product_id' => "6",
            'user_id' => "2",
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
        DB::table('wishlists')->insert([
            'product_id' => "7",
            'user_id' => "2",
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
        DB::table('wishlists')->insert([
            'product_id' => "8",
            'user_id' => "2",
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
    }
}
