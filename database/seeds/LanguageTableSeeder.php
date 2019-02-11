<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name'        => 'English',
            'flag'        => '',
            'abbr'        => 'en',
            'script'    => 'Latn',
            'native'    => 'English',
            'active'    => '1',
            'default'    => '0',
        ]);

        DB::table('languages')->insert([
            'name'        => 'Azerbaijani',
            'flag'        => '',
            'abbr'        => 'az',
            'script'    => 'Latn',
            'native'    => 'azərbaycanca',
            'active'    => '1',
            'default'    => '1',
        ]);

        DB::table('languages')->insert([
            'name'        => 'Russian',
            'flag'        => '',
            'abbr'        => 'ru',
            'script'    => 'Cyrl',
            'native'    => 'Русский',
            'active'    => '1',
            'default'    => '0',
        ]);

        DB::table('languages')->insert([
            'name'        => 'Turkish',
            'flag'        => '',
            'abbr'        => 'tr',
            'script'    => 'Latn',
            'native'    => 'Türkçe',
            'active'    => '1',
            'default'    => '0',
        ]);

        $this->command->info('Done');
    }
}
