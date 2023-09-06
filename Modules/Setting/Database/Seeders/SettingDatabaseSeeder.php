<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'SMart',
            'company_email' => 'ibrahim@sabira-iibs.id',
            'company_phone' => '081216635393',
            'notification_email' => 'ibrahim@sabira-iibs.id',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'SMart © 2023 || Developed by <strong><a target="_blank" href="">Ryand Arifriatoni</a></strong>',
            'company_address' => 'Mojokerto, Indonesia'
        ]);
    }
}
