<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'salesmonth', 'salesquantity'];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public static function list() {
    $sales = Sale::orderByRaw('salesmonth')->get();
    $list = [];
    foreach ($sales as $sale) {
        $list[$sale->id] = $sale->salesmonth;
    }
    return $list;
}
}
