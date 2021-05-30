<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert(
            [

            
            [
                'sales_guy_id' => 1,
                'postal_code' => rand(76200,76299),
                'stats' => 'Unbearbeitet',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 2,
                'postal_code' => rand(76200,76299),
                'stats' => 'GF Fehlt',
                'category' => 'Hotel',    
            ],
            [
                'sales_guy_id' => 3,
                'postal_code' => rand(76200,76299),
                'stats' => 'Nicht erreicht',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 4,
                'postal_code' => rand(76200,76299),
                'stats' => 'Weider',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 4,
                'postal_code' => rand(76200,76299),
                'stats' => 'Unbearbeitet',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 4,
                'postal_code' => rand(76200,76299),
                'stats' => 'Nicht erreicht',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 1,
                'postal_code' => rand(76200,76299),
                'stats' => 'Unbearbeitet',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 3,
                'postal_code' => rand(76200,76299),
                'stats' => 'GF Fehlt',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 3,
                'postal_code' => rand(76200,76299),
                'stats' => 'Unbearbeitet',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 2,
                'postal_code' => rand(76200,76299),
                'stats' => 'GF Fehlt',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 1,
                'postal_code' => rand(76200,76299),
                'stats' => 'GF Fehlt',
                'category' => 'Gym',    
            ],
            [
                'sales_guy_id' => 1,
                'postal_code' => rand(76200,76299),
                'stats' => 'Unbearbeitet',
                'category' => 'Hotel',    
            ],
            [
                'sales_guy_id' => 1,
                'postal_code' => rand(76200,76299),
                'stats' => 'Unbearbeitet',
                'category' => 'Hotel',    
            ]
            ]
           

    );
    }
}
