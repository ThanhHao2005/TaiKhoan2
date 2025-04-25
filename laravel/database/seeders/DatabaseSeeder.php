<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderNote;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create()->each(function ($user) {
            // Mỗi user có 2 đơn hàng
            Order::factory(2)->create(['user_id' => $user->id])->each(function ($order) {
                // Mỗi đơn hàng có 1-2 ghi chú
                OrderNote::factory(rand(1, 2))->create(['order_id' => $order->id]);
            });
        });
    }
}
