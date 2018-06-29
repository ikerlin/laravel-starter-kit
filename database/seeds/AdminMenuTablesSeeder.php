<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Menu;

class AdminMenuTablesSeeder extends Seeder
{
    /**
     * 后台菜单数据填充
     *
     * @return void
     */
    public function run()
    {
        //Menu::truncate();
        //项目管理
        Menu::insert([
            [
                'parent_id' => 0,
                'order'     => 8,
                'title'     => '项目管理',
                'icon'      => 'fa-product-hunt',
                'uri'       => '',
            ],
            [
                'parent_id' => 8,
                'order'     => 9,
                'title'     => '分类',
                'icon'      => 'fa-object-group',
                'uri'       => '/projectTypes',
            ],
            [
                'parent_id' => 8,
                'order'     => 10,
                'title'     => '项目',
                'icon'      => 'fa-list',
                'uri'       => '/projects',
            ],
        ]);
    }
}
