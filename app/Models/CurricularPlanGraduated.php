<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CurricularPlanGraduated extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'curricularPlanGraduateds';
    public $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function CurricularPlan(){

        return $this->belongsTo(GraduatedCourse::class, 'fk_graduatedCourse_id');
    }
}
