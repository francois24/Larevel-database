<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info extends Model
{
   protected $table = 'info';
   protected $primary = 'id';
   protected $fillable = ['firstname','lastname','address','bday'];
}
