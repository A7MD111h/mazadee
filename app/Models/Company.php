<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;

;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Company extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'phone',
        'city',
        'address',
        'commercial_register',
        'national_number',
        'category_id',
        
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
