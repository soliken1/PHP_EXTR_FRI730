<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Expense extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'category';
    protected $fillable = [
        'categoryTitle',
        'userId',
    ];
}
