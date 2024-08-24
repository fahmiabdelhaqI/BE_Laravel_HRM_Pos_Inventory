<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'display_name',
        'description',
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'permission_role');
    }
}
