<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'class',
        'address',
        'phone_id',
    ];

    public function phone() {
        return $this->belongsTo(Phone::class);
    }
}
