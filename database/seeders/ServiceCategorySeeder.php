<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert(
            [
            [
            "name" => "AC",
            "slug" => "ac",
            "image" => "1521969345.png"
        ],
        [
            "name" => "any01",
            "slug" => "any01",
            "image" => "1521969358.png"
        ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969409.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969419.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969430.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969446.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969454.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969464.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969490.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969512.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969522.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969536.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969558.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969576.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521969622.png"
            ],
            [
                "name" => "any01",
                "slug" => "any01",
                "image" => "1521972643.png"
            ],
            [
                "name" => "test",
                "slug" => "test",
                "image" => "1521972663.png"
            ],
            [
                "name" => "Kaz",
                "slug" => "kaz",
                "image" => "1521972769.png"
            ],
            [
                "name" => "Document",
                "slug" => "document",
                "image" => "1521974355.png"
            ],
            ]
    );
    }
}
