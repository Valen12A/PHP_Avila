<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table ='products';

    protected $fillable = ['code', 'brand', 'description', 'unit_measure', 'avaliable', 'vat_percentage', 'unit_price', 'stock'];
}
