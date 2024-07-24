<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    use HasFactory;

    protected $table = 'sample_data';

    protected $fillable = [
        'name', 'email', 'message', 'gender', 'location', 'contact'
    ];
}
