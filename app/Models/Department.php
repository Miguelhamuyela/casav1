<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'departments';
    public $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function departmentOfEnglish()
    {
        return $this->hasOne(DepartmentOfEnglish::class);
    }

    public function departmentOfPhilosofy()
    {
        return $this->hasOne(DepartmentOfPhilosofy::class);
    }

    public function departmentOfFranch()
    {
        return $this->hasOne(DepartmentOfFranch::class);
    }

    public function departmentOfPortuguese()
    {
        return $this->hasOne(DepartmentOfPortuguese::class);
    }

    public function departmentExecutiveSecretariat()
    {
        return $this->hasOne(DepartmentExecutiveSecretariat::class);
    }


}
