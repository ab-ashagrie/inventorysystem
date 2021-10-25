<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('settings')->insert(
            array(
                'id' => 1,
                'email' => 'admin@example.com',
                'currency_id' => 1,
                'client_id' => 1,
                'warehouse_id' => Null,
                'CompanyName' => 'Yonas General Printing | Advanced Inventory With POS',
                'CompanyPhone' => '6315996770',
                'CompanyAdress' => '3618 Abia Martin Drive',
                'footer' => 'Yonas General Printing | Advanced Inventory With POS',
                'developed_by' => 'Yonas General Printing | Advanced Inventory With POS',
                'logo' => 'logo-default.png',
            )
            
        );
    }
}
