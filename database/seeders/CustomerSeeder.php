<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->name = 'Hoàng Ngọc Nam';
        $customer->email = 'namhoang@gmail.com';
        $customer->group = 'Quản trị hệ thống';
        $customer->gender = 'Nam';
        $customer->phone = '0987657009';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Trần Thị Dung';
        $customer->email = 'dung@gmail.com';
        $customer->group = 'Quản trị nhân sự';
        $customer->gender = 'nữ';
        $customer->phone = '0987658889';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Hà Thu';
        $customer->email = 'hathu@gmail.com';
        $customer->group = 'Quản lý Phòng';
        $customer->gender = 'Nữ';
        $customer->phone = '0987678957';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Tiến Lực';
        $customer->email = 'tienluc@gmail.com';
        $customer->group = 'Lễ Tân';
        $customer->gender = 'Nam';
        $customer->phone = '0987657088';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Trần Thị Mỹ';
        $customer->email = 'hoangmy@gmail.com';
        $customer->group = 'Quản lý dịch vụ';
        $customer->gender = 'Nữ';
        $customer->phone = '0987657888';
        $customer->save();
    }
}
