<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saler extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'address', 'sex'];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public static function list() {

        $salers = Saler::orderByRaw('fullname')->get();
        $list = [];
        foreach ($salers as $saler) {
            $list[$saler->id] = $saler->fullname;
        }
        return $list;
    }
}
