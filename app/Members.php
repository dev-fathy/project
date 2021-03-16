<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class Members extends Model {

    use HasRoles;
    protected $guard_name = 'web';

    protected $table = 'members';
    protected $fillable = [
        'name', 'role_id',
    ];
    
    public const VALIDATION_RULES = array(
        'name' => 'required|string|max:255',
    );



}
