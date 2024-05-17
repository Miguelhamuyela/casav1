<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepartmentOfPhilosofy extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'departmentOfPhilosofies';
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

        return $this->hasMany(DepartmentPhilosofyMember::class, 'fk_departmentPhilosofy_id');
    }

}
