<?php

namespace Database\Seeders;

use App\Models\Konfigurasi\Menu;
use App\Models\Permission;
use App\Traits\HasMenuPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    use HasMenuPermission;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master_menu = Menu::firstOrCreate(['url' => 'konfigurasi'], [
            'name' => 'konfigurasi',
            'category' => 'Master Data',
            'icon' => 'setting'
        ]);

        $this->attachMenupermission($master_menu, ['read'], ['ceo']);

        $sub_menu = $master_menu->subMenus()->create([
            'name' => 'Menu',
            'url' => $master_menu->url . '/menu',
            'category' => $master_menu->category
        ]);
        $this->attachMenupermission($sub_menu, null, ['ceo']);
    }
}
