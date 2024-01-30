<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sub_Category extends Model
{
    use HasFactory;
    use softDeletes;
    protected $guarded;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function auctions(){
        return $this->hasMany(Auction::class, 'sub_category_id');
    }
}
