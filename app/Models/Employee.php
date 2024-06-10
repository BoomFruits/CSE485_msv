<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'EmployeeID';
    protected $table = 'employees';
    public function project(){
        return $this->belongsToMany(Project::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function isManager(){
        return $this->EmployeeID === $this->departments()->manager_id;
    }
}
