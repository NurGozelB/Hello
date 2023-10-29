<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function Category(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function User(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
