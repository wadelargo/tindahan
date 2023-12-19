<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['saler_id', 'itemname', 'brandname', 'itemprice', 'itemstock'];

    public function sales() {
        return $this->hasMany(Sale::class);
    }

    public function saler() {
        return $this->belongsTo(Saler::class);
    }

    public static function list() {

        $products = Product::orderByRaw('itemname')->get();
        $list = [];
        foreach ($products as $product) {
            $list[$product->id] = $product->itemname;
        }
        return $list;
    }
}
