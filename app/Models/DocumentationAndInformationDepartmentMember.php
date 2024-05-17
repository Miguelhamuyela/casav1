<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentationAndInformationDepartmentMember extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'documentationMembers';
    public $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function DepartmentMember(){

        return $this->belongsTo(DocumentationAndInformationDepartment::class, 'fk_documentationMembers_id');
    }


}
