<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TypeUser extends Model
{
    //use Hasfactory
    use softDeletes;

    //declane table
    public $table = 'type_user';

    // this field must type user date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

     protected $fillable = [
        'name',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many
    public function detail_user()
    {
        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\DetailUser', 'type_user_id');
    }
}
