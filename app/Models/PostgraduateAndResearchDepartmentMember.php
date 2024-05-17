<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostgraduateAndResearchDepartmentMember extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'postgraduateMembers';

    protected $guarded = ['id'];

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function DepartmentMember(){

        return $this->belongsTo(PostgraduateAndResearchDepartment::class, 'fk_postgraduateMembers_id');
    }
}
