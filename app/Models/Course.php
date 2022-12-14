<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'price',
        'image_url',
        'user_id',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
