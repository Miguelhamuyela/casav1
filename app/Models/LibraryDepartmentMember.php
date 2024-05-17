<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LibraryDepartmentMember extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'libraryMembers';
    public $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    public function DepartmentMember(){

        return $this->belongsTo(LibraryDepartment::class, 'fk_libraryMembers_id');
    }

}
