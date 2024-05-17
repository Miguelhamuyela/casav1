<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepartmentEnglishMember extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'departmentEnglishMembers';
    public $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function DepartmentMember(){

        return $this->belongsTo(DepartmentOfEnglish::class, 'fk_departmentEnglish_id');
    }


}
