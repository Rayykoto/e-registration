<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    use HasFactory;

    protected $table = 'ro_output';
    protected $primaryKey = 'output_id';
    protected $guarded = [];
}
