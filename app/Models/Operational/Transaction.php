<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Transaction extends Model
{
    //use Hasfactory
    use softDeletes;

    //declane table
    public $table = 'transaction';

    // this field must type user date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

     protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many 
    public function appointment()
    {
    // 3 parameter (path model, field forgeign key, field primary key from table HasMany/hasOne)
    return $this->belongsTo('App\Models\Operational\Appointment', 'appointment_id', 'id');
    }
}
