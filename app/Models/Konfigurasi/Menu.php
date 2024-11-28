<?php

namespace App\Models\Konfigurasi;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function subMenus()
    {
        return $this->hasMany(Menu::class, 'main_menu_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'menu_permissions', 'menu_id', 'permission_id');
    }
}
