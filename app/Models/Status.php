<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $fillable = [
        'status_id',
        'meaning'
    ];


    public function status() {
        return $this->hasMany(Loan::class, 'status');
    }
}