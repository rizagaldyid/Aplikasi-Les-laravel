<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'given_by',
        'comments',
        'rating',
    ];

    // Relasi ke model Lesson
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
