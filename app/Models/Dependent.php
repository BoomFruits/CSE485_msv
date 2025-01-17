<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'DependentID';
    protected $table = 'dependents';
    public function employee(){
        return $this->belongsToMany(Employee::class);
    }
}
