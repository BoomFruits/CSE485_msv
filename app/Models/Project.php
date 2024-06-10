<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'ProjectID';
    protected $table = 'projects';
    public function employee(){
        return $this->belongsToMany(Employee::class);
    }
}
