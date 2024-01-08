<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use AuthenticatableTrait;
    use HasFactory;
    protected $guarded;
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
