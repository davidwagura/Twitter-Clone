<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image_path', 'creator_id'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'group_user');
    }
    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function groupUser() {

        return $this->belongsToMany(GroupUser::class);

    }
    
}
