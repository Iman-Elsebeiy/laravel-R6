<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Phone extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'phone_number'
    ];

    public function student() {
        return $this->hasOne(Student::class);
    }
}
