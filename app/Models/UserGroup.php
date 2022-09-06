<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
    
    protected $fillable = ['title'];


    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
    * Getting array for select option
    **/
    public static function arrayForSelect() {
    	$arr = [];
    	$groups = UserGroup::all();
        foreach ($groups as $group) {
            $arr[$group->id] = $group->title;
        } 

        return $arr;
    }
}
