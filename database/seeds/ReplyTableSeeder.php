<?php
use Illuminate\Database\Seeder;
use App\Reply;
use App\User;


class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // 所有用户 ID 数组，如：[1,2,3,4]
        $user_ids = User::all()->pluck('id')->toArray();

        // 所有商店 ID 数组，如：[1,2,3,4]
        //$shop_ids = '1';

        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        $replys = factory(Reply::class)
            ->times(10)
            ->make()
            ->each(function ($reply, $index)
            use ($user_ids, $faker)
            {
                // 从用户 ID 数组中随机取出一个并赋值
                $reply->user_id = $faker->randomElement($user_ids);

                // 商店 ID
                $reply->shop_id = '1';
            });

        // 将数据集合转换为数组，并插入到数据库中
        Reply::insert($replys->toArray());
    }
}
