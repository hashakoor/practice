<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    /**
     * Get first level children for the menu items.
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    /**
     * Get n level of children for the menu items.
     */
    public function grandchildren()
    {
        return $this->children()->with('grandchildren');
    }
}
