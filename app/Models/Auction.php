<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;
    public $guarded;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function subCategory(){
        return $this->belongsTo(Sub_Category::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
