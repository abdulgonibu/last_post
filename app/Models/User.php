<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\XmlConfiguration\Group;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['group_id', 'name', 'phone', 'email', 'address'];

    public function group()
    {
        return $this->belongsTo(UserGroup::class);
    }

    /**
     * Getting array for select option
     **/
    public static function arrayForSelect()
    {
        $arr = [];
        $groups = UserGroup::all();
        foreach ($groups as $group) {
            $arr[$group->id] = $group->title;
        }

        return $arr;
    }
}
