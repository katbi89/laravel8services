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
        DB::table("service_categories")->insert(
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
                    "name" => "any02",
                    "slug" => "any02",
                    "image" => "1521969409.png"
                ],
                [
                    "name" => "any03",
                    "slug" => "any03",
                    "image" => "1521969419.png"
                ],
                [
                    "name" => "any04",
                    "slug" => "any04",
                    "image" => "1521969430.png"
                ],
                [
                    "name" => "any05",
                    "slug" => "any05",
                    "image" => "1521969446.png"
                ],
                [
                    "name" => "any06",
                    "slug" => "any06",
                    "image" => "1521969454.png"
                ],
                [
                    "name" => "any07",
                    "slug" => "any07",
                    "image" => "1521969464.png"
                ],
                [
                    "name" => "any08",
                    "slug" => "any08",
                    "image" => "1521969490.png"
                ],
                [
                    "name" => "any09",
                    "slug" => "any09",
                    "image" => "1521969512.png"
                ],
                [
                    "name" => "any10",
                    "slug" => "any10",
                    "image" => "1521969522.png"
                ],
                [
                    "name" => "any11",
                    "slug" => "any11",
                    "image" => "1521969536.png"
                ],
                [
                    "name" => "any12",
                    "slug" => "any12",
                    "image" => "1521969558.png"
                ],
                [
                    "name" => "any13",
                    "slug" => "any13",
                    "image" => "1521969576.png"
                ],
                [
                    "name" => "any14",
                    "slug" => "any14",
                    "image" => "1521969622.png"
                ],
                [
                    "name" => "any15",
                    "slug" => "any15",
                    "image" => "1521972643.png"
                ],
                [
                    "name" => "any16",
                    "slug" => "any16",
                    "image" => "1521972663.png"
                ],
                [
                    "name" => "any17",
                    "slug" => "any17",
                    "image" => "1521972769.png"
                ],
                [
                    "name" => "any18",
                    "slug" => "any18",
                    "image" => "1521974355.png"
                ],
            ]
        );
    }
}
