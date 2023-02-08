<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','description','created_at'
    ];
    public function post(){
        return $this->hasOne(Post::class)->withDefault(['id'=>'id not found']);
    }
}
