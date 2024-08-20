<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'loan_date',
        'return_date',
        'duration'
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function book():BelongsTo{
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
