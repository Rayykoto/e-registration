<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'ro_patient';
<<<<<<< HEAD
    protected $primaryKey = 'patient_id';
    protected $guarded = [];
}

=======
    protected $guarded = [];
}
>>>>>>> 7fd9f40b007b0345960f4d4fe72eb750c02f77de
