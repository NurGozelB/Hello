<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function Color(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function Country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }


    public function FabricTexture(): BelongsTo
    {
        return $this->belongsTo(FabricTexture::class);
    }


    public function FabricType(): BelongsTo
    {
        return $this->belongsTo(FabricType::class);
    }


    public function hasDiscount()
    {
        return $this->discount_percent > 0 ? true : false;
    }


    public function price()
    {
        return round($this->price * (1 - $this->discount_percent / 100), 1) - 1;
    }
}
