<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fabricType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Fabric(): HasMany
    {
        return $this->hasMany(Fabric::class);
    }
}
