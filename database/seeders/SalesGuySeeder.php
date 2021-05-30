<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SalesGuySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales_guys')->insert(
            [
            [
                'name' => 'Mikaeel',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 7 bahria town ISB pak',
                'phone' => '0232123231',
            ],
            [
                'name' => 'John Doe',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 7 bahria town ISB pak',
                'phone' => '02321231231',     
            ],
            [
                'name' => 'John Smith',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 8 bahria town ISB pak',
                'phone' => '03221231231',     
            ],
            [
                'name' => 'Maham Smith',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 9 bahria town ISB pak',
                'phone' => '03221232231',     
            ],
            [
                'name' => 'Shahkar Smith',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 10 bahria town ISB pak',
                'phone' => '033321232231',     
            ],
            [
                'name' => 'khalid Doe',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 11 bahria town ISB pak',
                'phone' => '03021232251',     
            ],
            [
                'name' => 'Asim Doe',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 12 bahria town ISB pak',
                'phone' => '030021234323',     
            ],
            [
                'name' => 'Maryam Smith',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 13 bahria town ISB pak',
                'phone' => '033021232231',     
            ],
            [
                'name' => 'Awais Doe',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 14 bahria town ISB pak',
                'phone' => '032321232431',     
            ],
            [
                'name' => 'Zakriya Doe',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 15 bahria town ISB pak',
                'phone' => '030451232231',     
            ],
            [
                'name' => 'Hafeez Doe',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 16 bahria town ISB pak',
                'phone' => '030021762231',     
            ],
            [
                'name' => 'Bakri Doe',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 17 bahria town ISB pak',
                'phone' => '030026432231',     
            ],
            [
                'name' => 'Faysal Doe',
                'email' => Str::random(10).'@gmail.com',
                'address' => 'Phase 18 bahria town ISB pak',
                'phone' => '030323432231',     
            ],
            ]
                

    );
    }
}
