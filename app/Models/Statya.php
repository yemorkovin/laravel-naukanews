<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statya extends Model
{
    use HasFactory;
    protected $table = 'statya';
    protected $fillable = ['title', 'lid', 'content', 'rubrics', 'image'];
    protected  $guarded = ['id'];
}
