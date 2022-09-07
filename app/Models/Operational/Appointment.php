<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Appointment extends Model
{
    //use Hasfactory
    use softDeletes;

    //declane table
    public $table = 'appointment';

    // this field must type user date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

     protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many 
    public function doctor()
    {
    // 3 parameter (path model, field forgeign key, field primary key from table HasMany/hasOne)
    return $this->belongsTo('App\Models\Operational\Doctor', 'doctor_id', 'id');
    }

    // one to many 
    public function consultation()
    {
    // 3 parameter (path model, field forgeign key, field primary key from table HasMany/hasOne)
    return $this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
    }

    // one to many 
    public function user()
    {
    // 3 parameter (path model, field forgeign key, field primary key from table HasMany/hasOne)
    return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    // one to many
    public function transaction()
    {
        // 2 parameter (path model, field foreign key)
        return $this->hasOne('App\Models\Operational\Transaction', 'appointment_id');
    }
}