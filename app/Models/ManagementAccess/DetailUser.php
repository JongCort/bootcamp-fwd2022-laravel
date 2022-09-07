<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class DetailUser extends Model
{
    //use Hasfactory
    use softDeletes;

    //declane table
    public $table ='detail_user';

    // this field must type user date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

     protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'addres',
        'photo',
        'gender',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many 
    public function detail_user()
    {
        // 3 parameter (path model, field forgeign key, field primary key from table HasMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }

    // one to many 
    public function user()
    {
    // 3 parameter (path model, field forgeign key, field primary key from table HasMany/hasOne)
    return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}

