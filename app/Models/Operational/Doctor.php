<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Doctor extends Model
{
    //use Hasfactory
    use softDeletes;

    //declane table
    public $table = 'doctor';

    // this field must type user date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

     protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many 
    public function specialist()
    {
        // 3 parameter (path model, field forgeign key, field primary key from table HasMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
    }
    
    public function appointment()
    {
        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
    }
}
