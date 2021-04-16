<?php

namespace App\Http\Controllers\MyAdmin;

use App\Models\Book;
use App\Models\BookRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookRequestController extends Controller
{
    public function requestBook(){
        $bookRequest = BookRequest::with('user')->get();
        $listBooks = Book::all();
        dd($bookRequest);
        return view('admin.dashboard')->with('books',$books)->with('listBooks', $listBooks);
    }

}
