<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'DepartmentID';
    protected $table = 'departments';
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
    public function manager()
    {
        return $this->hasOne(Employee::class, 'manager_id');
    }
}
