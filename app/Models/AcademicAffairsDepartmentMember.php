<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicAffairsDepartmentMember extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'academicAffairsMembers';
    protected $guarded = ['id'];

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function DepartmentMember(){

        return $this->belongsTo(AcademicAffairsDepartment::class, 'fk_academicAffairsMembers_id');
    }
}
