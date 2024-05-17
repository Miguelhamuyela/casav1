<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostgraduateAndResearchDepartment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'postgraduateAndResearchDepartments';

    protected $guarded = ['id'];

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

        return $this->hasMany(PostgraduateAndResearchDepartmentMember::class, 'fk_postgraduateMembers_id');
    }
}
