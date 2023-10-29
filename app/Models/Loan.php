<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
      'personnel_id',
      'dealer_id',
      'bank_id',
      'percent',
      'description',
      'amount',
      'status',
    ];

    public function user() {
        return $this->hasOne(User::class, 'id');
    }
}
