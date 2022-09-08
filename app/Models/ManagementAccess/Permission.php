<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Permission extends Model
{
    //use Hasfactory
    use softDeletes;

    //declane table
    public $table ='permission';

    // this field must type user date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

     protected $fillable = [
        'title',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many
    public function permission_role()
    {
        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'permission_id');
    }
}
