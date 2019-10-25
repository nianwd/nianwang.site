<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogFriends extends Model
{
    protected $table = 'blog_friends';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function getFriendsImgAttribute($value)
    {
        if(blank($value)){
            $avatar = $this->sex == 2 ? env('IMG_URL') . 'female.png' : env('IMG_URL') . 'male.png';
        }else{
            $avatar = env('IMG_URL') . $value;
        }

        return $avatar;
    }

}
