<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * The settings to add.
     */
    protected $settings = [
        [
            'key'         => 'logo',
            'name'        => 'Logo',
            'description' => 'Logo',
            'value'       => 'uploads/logo.png',
            'field'       => '{"name":"value","label":"Logo","type":"browse"}',
            'active'      => 1,
        ],
        [
            'key'         => 'telegram',
            'name'        => 'Telegram',
            'description' => 'Telegram',
            'value'       => 'https://telegram.com',
            'field'       => '{"name":"value","label":"Telegram","type":"text"}',
            'active'      => 1,

        ],
        [
            'key'         => 'twitter',
            'name'        => 'Twitter',
            'description' => 'Twitter',
            'value'       => 'https://twitter.com',
            'field'       => '{"name":"value","label":"Twitter","type":"text"}',
            'active'      => 1,

        ],
        [
            'key'         => 'facebook',
            'name'        => 'Facebook',
            'description' => 'Facebook',
            'value'       => 'https://facebook.com',
            'field'       => '{"name":"value","label":"Facebook","type":"text"}',
            'active'      => 1,

        ],
        [
            'key'         => 'instagram',
            'name'        => 'Instagram',
            'description' => 'Instagram',
            'value'       => 'https://instagram.com',
            'field'       => '{"name":"value","label":"Instagram","type":"text"}',
            'active'      => 1,

        ],
        [
            'key'         => 'youtube',
            'name'        => 'Youtube',
            'description' => 'Youtube',
            'value'       => 'https://youtube.com',
            'field'       => '{"name":"value","label":"Youtube","type":"text"}',
            'active'      => 1,

        ],
        [
            'key'         => 'email',
            'name'        => 'Email',
            'description' => 'Email',
            'value'       => 'info@test.com',
            'field'       => '{"name":"value","label":"Email","type":"email"}',
            'active'      => 1,

        ],
        [
            'key'         => 'email2',
            'name'        => 'Email 2',
            'description' => 'Email 2',
            'value'       => 'info2@test.com',
            'field'       => '{"name":"value","label":"Email 2","type":"email"}',
            'active'      => 1,

        ],
        [
            'key'         => 'phone',
            'name'        => 'Phone',
            'description' => 'Phone',
            'value'       => '+994555555555',
            'field'       => '{"name":"value","label":"Phone","type":"text"}',
            'active'      => 1,

        ],
        [
            'key'         => 'phone2',
            'name'        => 'Phone 2',
            'description' => 'Phone 2',
            'value'       => '+994505000005',
            'field'       => '{"name":"value","label":"Phone 2","type":"text"}',
            'active'      => 1,

        ],
        [
            'key'         => 'address',
            'name'        => 'Address',
            'description' => 'Address',
            'value'       => 'Bakı şəhəri, Zərifə Əliyeva küçəsi 77',
            'field'       => '{"name":"value","label":"Address","type":"text"}',
            'active'      => 1,

        ],

        [
            'key'         => 'address2',
            'name'        => 'Address 2',
            'description' => 'Address 2',
            'value'       => 'Bakı şəhəri, Zərifə Əliyeva küçəsi 77',
            'field'       => '{"name":"value","label":"Address 2","type":"text"}',
            'active'      => 1,

        ],



    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting) {
            $result = DB::table('settings')->insert($setting);

            if (!$result) {
                $this->command->info("Insert failed at record $index.");

                return;
            }
        }

        $this->command->info('Inserted '.count($this->settings).' records.');
    }
}
