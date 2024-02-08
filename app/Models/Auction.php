<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Auction extends Model
{
    use HasFactory;
    public $guarded;
    protected $fillable = [
        'id',
        'user_id',
        'sub_category_id',
        'quality',
        'budjet',
        'city',
        'quantity',
        'description',
        'status',
        'company_price',
        'company_id',
        'payment_Status',
        'code',
    ];    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function subCategory(){
        return $this->belongsTo(Sub_Category::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
    protected static function booted()
    {
        static::creating(function ($auction) {
            $auction->code = Uuid::uuid4()->toString();
        });
    }
}
