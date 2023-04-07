<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('source_news')->insert($this->getData());
    }

    private function getData():array
    {
        $data = [];

        for ($i=0; $i<10; $i++) {
            $data[] = [
                'nameSource' => fake('ru_RU')->company(),
                'description' => fake('ru_RU')->realText('200'),
                'link' => fake('ru_RU')->url(),
                'image' => fake('ru_RU')->imageUrl(),
            ];
        }

        return $data;
    }
}
