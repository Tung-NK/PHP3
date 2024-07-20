<?php

namespace Database\Seeders;

use App\Models\ProductComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductCommentSeedes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductComment::factory() -> count(15) -> create();
    }
}
