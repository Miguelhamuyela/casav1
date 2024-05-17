<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepartmentExecutiveSecretariat extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'departmentExecutiveSecretariats';
    public $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }


    public function departmentMember(){

        return $this->hasMany(ExecutiveMember::class, 'fk_ExecutiveMembers_id');
    }

}
