<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ConfigPayment extends Model
{
    //use Hasfactory
    use softDeletes;

    //declane table
    public $table = 'config_payment';

    // this field must type user date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

     protected $fillable = [
        'fee',
        'vat',
        'created_at',
        'update_at',
        'deleted_at',
    ];
}
