<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRequest extends Model
{
    use HasFactory;
    protected $table = 'tbl_book_request';
    protected $fillable = ['book_id','borrower_id','borrow_quantity','borrow_status'];

    public function listOfBooks(){

        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'borrower_id');
    }
}
