<?php

use Illuminate\Database\Seeder;
use App\Sales;

class SalesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {


        DB::table('sales')->insert([
            'sales_user' => 'Lala',
            'Payment' => '1900',
        ]);
        DB::table('sales')->insert([
            'sales_user' => 'Dipsy',
            'Payment' => '200.01',
        ]);
    }

}
