<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'body',
        'image',
        'guest_id',
        "date",
    ];

    public function ownedBy(User $user){
        return $user->id === $this->user_id;
    }


}
