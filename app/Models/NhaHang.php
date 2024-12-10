<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhaHang extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
        'location',
        'cuisine',
        'rating'
    ];

    public $table = 'nha_hangs';
    
    public $timestamp = false;
}
