<?php

namespace Database\Seeders;

use App\Models\FooterContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterContactSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FooterContent::factory()->create([
            'tel' => '+99361223344',
            'email' => 'example@gmial.com',
            'address_tm' => 'şaher Aşgabad',
            'address_ru' => 'город Ашгабад',
            'address_en' => 'Ashgabad city',
            'work_tm' => '8:00 - 23:00 br-ot',
            'work_ru' => '8:00 - 23:00 пн-вс',
            'work_en' => '8:00 - 23:00 mn-sn',
        ]);
    }
}
