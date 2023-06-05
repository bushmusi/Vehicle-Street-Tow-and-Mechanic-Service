<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Mechanic;

class Address extends Model
{
    use HasFactory;
    
    protected $fillable = ['subcity', 'woreda'];
    public function mechanics()
    {
        return $this->hasMany(Mechanic::class, 'subcity_id');
    }
    public function users()
    {
        return $this->hasMany(User::class, 'address_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
