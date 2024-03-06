<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;

    protected $table = "audio";

    protected $fillable = [
        "title",
        "description",
        "audio",
        "image",
        "language",
        "status",
        "pastor_id",
        "location",
    ];
}
