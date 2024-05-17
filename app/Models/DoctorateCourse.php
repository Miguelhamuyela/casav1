<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoctorateCourse extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'doctorateCourses';
    public $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function CurricularPlan(){

        return $this->hasMany(CurricularPlanDoctorate::class, 'fk_DoctorateCourse_id');
    }
}
