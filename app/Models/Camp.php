<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Camp extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'price']; //kenapa di protected ? karena cuma title dan price yang di isi, kalo untuk slug berdasarkan pengisian otomatis di title
}
