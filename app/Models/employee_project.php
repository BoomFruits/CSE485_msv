<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_project extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'epID';
    protected $table = 'employee_project';
    
}
