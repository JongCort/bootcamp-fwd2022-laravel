<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Specialist extends Model
{
    //use Hasfactory
    use softDeletes;

    //declane table
    public $table = 'specialist';

    // this field must type user date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

     protected $fillable = [
        'name',
        'price',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many
    public function doctor()
    {
        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
    }
}
