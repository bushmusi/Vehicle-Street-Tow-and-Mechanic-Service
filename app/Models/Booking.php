<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'problem_description',
        'issue_type',
        'address_id',
        'status',
        'fixer_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fixer()
    {
        return $this->belongsTo(User::class, 'fixer_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}

