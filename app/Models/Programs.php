<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    use HasFactory;

     /*  $table->string('venue');
            $table->string('title');
            $table->string('description');
            $table->string('programdirection');
            $table->date('eventdate'); */

    protected $table = "programs";

    protected $fillable = [
        "venue",
        "title",
        "description",
        "programdirection",
        "eventdate",
    ];


}
