<?php

use App\Shop;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        $shops = factory(Shop::class)
            ->times(5)
            ->make()
            ->each(function ($reply, $index)
            use ($faker)
            {

            });

        // 将数据集合转换为数组，并插入到数据库中
        Shop::insert($shops->toArray());
    }
}
