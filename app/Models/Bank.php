<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';

    protected  $primaryKey = 'bank_id';

    protected $fillable = [
        'bank_id',
        'bank_name',
        'entity',
        'email',
        'website',
        'phone',
        'address'
    ];

    public function bank() {
        return $this->hasMany(Loan::class, 'bank_id');
    }
}
