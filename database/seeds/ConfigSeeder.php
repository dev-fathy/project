<?php

use Illuminate\Database\Seeder;
use App\Config;

class ConfigSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {


        DB::table('configs')->insert([
                'sales_target' => '2000',
                'sales_user' => 'Lala',
        ]);
        DB::table('configs')->insert([
                'sales_target' => '3000.50',
                'sales_user' => 'Dipsy',
        ]);

       
    }

}
