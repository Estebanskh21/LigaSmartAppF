<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    use HasFactory;
    protected $table = 'ligas';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','region','ano_fundacion'];
}
