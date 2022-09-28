<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profile';
    protected $primarykey = 'id';
    protected $fillable = ['firstname','lastname','address','bday','photo'];
}
