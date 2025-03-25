<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
        "phone_number",
        "birth_date",
    ];
    // protected $guarded = [
    //     "id",
    //     "created_at",
    //     "updated_at"
    // ];
}
