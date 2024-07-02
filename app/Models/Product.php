<?php

namespace App\Models;

use App\Models\ProductPurchase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'title',
        'description',
        'price',
        'date',
        'time',
        'duration',
        'location',
        'teacher_id'
    ];

    public function purchases()
    {
        return $this->hasMany(ProductPurchase::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'product_purchases');
    }
}
