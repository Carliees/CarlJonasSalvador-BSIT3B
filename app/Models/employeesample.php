<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeesample extends Model
{
   protected $table  = 'employee_sample';
   protected $primaryKey = 'id';
   protected $fillable = [
        'first_name',
        'last_name',
        'address',       
   ];
  use HasFactory;
}
