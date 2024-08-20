<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'publish_year',
        'genre',
        'available_quantity'
    ];
    public function loans():HasMany{
        return $this->hasMany(Loan::class, 'book_id', 'id');
    }
}
