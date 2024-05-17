<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterCourse extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'masterCourses';
    public $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function CurricularPlan(){

        return $this->hasMany(CurricularPlanMaster::class, 'fk_MasterCourse_id');
    }
}
