<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fabricTexture extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function create($array)
    {
        //
    }

    public function Fabric(): HasMany
    {
        return $this->hasMany(Fabric::class);
    }
}
