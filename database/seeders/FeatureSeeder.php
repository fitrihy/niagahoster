<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feature')->insert([[
            'price_id' => 1,
            'feature' => '0.5X RESOURCE POWER',
        ],[
            'price_id' => 1,
            'feature' => '500 MB Disk Space',
        ],[
            'price_id' => 1,
            'feature' => 'Unlimited Bandwidth',
        ],[
            'price_id' => 1,
            'feature' => 'Unlimited Databases',
        ],[
            'price_id' => 1,
            'feature' => '1 Domain',
        ],[
            'price_id' => 1,
            'feature' => 'Instant Backup',
        ],[
            'price_id' => 1,
            'feature' => 'Unlimited SSL Gratis Selamanya',
        ]]);


        DB::table('feature')->insert([[
            'price_id' => 2,
            'feature' => '1X RESOURCE POWER',
        ],[
            'price_id' => 2,
            'feature' => 'Unlimited Disk Space',
        ],[
            'price_id' => 2,
            'feature' => 'Unlimited POP3 Email',
        ],[
            'price_id' => 2,
            'feature' => 'Unlimited Bandwidth',
        ],[
            'price_id' => 2,
            'feature' => 'Unlimited Databases',
        ],[
            'price_id' => 2,
            'feature' => '10 Addon Domain',
        ],[
            'price_id' => 2,
            'feature' => 'Instant Backup',
        ],[
            'price_id' => 2,
            'feature' => 'Domain Gratis Selamanya',
        ],[
            'price_id' => 2,
            'feature' => 'Unlimited SSL Gratis Selamanya',
        ]]);

        DB::table('feature')->insert([[
            'price_id' => 3,
            'feature' => '2X RESOURCE POWER',
        ],[
            'price_id' => 3,
            'feature' => 'Unlimited Disk Space',
        ],[
            'price_id' => 3,
            'feature' => 'Unlimited POP3 Email',
        ],[
            'price_id' => 3,
            'feature' => 'Unlimited Bandwidth',
        ],[
            'price_id' => 3,
            'feature' => 'Unlimited Databases',
        ],[
            'price_id' => 3,
            'feature' => '10 Addon Domain',
        ],[
            'price_id' => 3,
            'feature' => 'Instant Backup',
        ],[
            'price_id' => 3,
            'feature' => 'Domain Gratis Selamanya',
        ],[
            'price_id' => 3,
            'feature' => 'Unlimited SSL Gratis Selamanya',
        ],[
            'price_id' => 3,
            'feature' => 'Private Name Server',
        ],[
            'price_id' => 3,
            'feature' => 'SpamAssasin Mail Protection',
        ]]);

        DB::table('feature')->insert([[
            'price_id' => 4,
            'feature' => '3X RESOURCE POWER',
        ],[
            'price_id' => 4,
            'feature' => 'Unlimited Disk Space',
        ],[
            'price_id' => 4,
            'feature' => 'Unlimited POP3 Email',
        ],[
            'price_id' => 4,
            'feature' => 'Unlimited Bandwidth',
        ],[
            'price_id' => 4,
            'feature' => 'Unlimited Databases',
        ],[
            'price_id' => 4,
            'feature' => '10 Addon Domain',
        ],[
            'price_id' => 4,
            'feature' => 'Magic Auto Backup & Restore',
        ],[
            'price_id' => 4,
            'feature' => 'Domain Gratis Selamanya',
        ],[
            'price_id' => 4,
            'feature' => 'Unlimited SSL Gratis Selamanya',
        ],[
            'price_id' => 4,
            'feature' => 'Private Name Server',
        ],[
            'price_id' => 4,
            'feature' => 'Prioritas Layanan Support',
        ],[
            'price_id' => 4,
            'feature' => 'Spam Expert Pro Mail Protection',
        ]]);
    }
}
