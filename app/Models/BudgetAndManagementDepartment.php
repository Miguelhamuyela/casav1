<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BudgetAndManagementDepartment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'budgetAndManagementDepartments';
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

        return $this->hasMany(BudgetAndManagementDepartmentMember::class, 'fk_administrationMembers_id');
    }
}
