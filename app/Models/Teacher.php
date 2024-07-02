<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'specialty'];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
