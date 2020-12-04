<?php

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Setting::create([
            'store_name'=>'Right Step',
            'store_state'=>1,
            'currency'=>'SAR',
            'VAT'=>0
        ]);
        User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password' =>\Illuminate\Support\Facades\Hash::make('12345678'),
        ]);

        User::factory()
            ->times(10)
            ->create();

        Category::factory()
            ->times(5)
            ->create();
        Product::factory()
            ->times(10)
            ->hasCategories(rand(0,5))
            ->create();
        Order::factory()
            ->times(10)
            ->create();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
