<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    use HasFactory;

    protected $table = 'ro_exam';
    protected $primaryKey = 'exam_id';
    protected $guarded = [];
}
