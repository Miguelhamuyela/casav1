<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BudgetAndManagementDepartmentMember extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'administrationMembers';
    protected $guarded = ['id'];

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function DepartmentMember(){

        return $this->belongsTo(BudgetAndManagementDepartment::class, 'fk_administrationMembers_id');
    }
}
