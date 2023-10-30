<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table ='countries';

    protected $fillable = ['contry_name', 'country_code'];
}
