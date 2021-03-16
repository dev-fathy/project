<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class config extends Model
{
    protected $table = 'configs';
    protected $fillable = [
        'sales_target', 'sales_user',
    ];
}
