<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class PermissionRole extends Model
{
    //use Hasfactory
    use softDeletes;

    //declane table
    public $table ='permission_role';

    // this field must type user date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

     protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many 
    public function permission()
    {
        // 3 parameter (path model, field forgeign key, field primary key from table HasMany/hasOne)
        return $this->belongsTo('App\Models\ManagementAccess\Permission', 'permission_id', 'id');
    }

    // one to many 
    public function role()
    {
        // 3 parameter (path model, field forgeign key, field primary key from table HasMany/hasOne)
        return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
    }
}
