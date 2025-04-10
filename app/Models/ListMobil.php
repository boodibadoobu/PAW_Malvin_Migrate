<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListMobil extends Model
{
    protected $table = 'list_mobil';

    protected $fillable = ['merk', 'nama', 'price'];
}
