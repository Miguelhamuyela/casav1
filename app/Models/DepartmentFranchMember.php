<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepartmentFranchMember extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'departmentFranchMembers';
    public $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function DepartmentMember(){

        return $this->belongsTo(DepartmentOfFranch::class, 'fk_departmentFranch_id');
    }


}
