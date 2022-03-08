<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sofa\Eloquence\Eloquence;


class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name','subject','roll','updated_by','created_by','deleted_at'];
    function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }

}
