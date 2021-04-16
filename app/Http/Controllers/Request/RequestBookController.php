<?php

namespace App\Http\Controllers\Request;

use App\Models\Book;
use App\Models\BookRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RequestBookController extends Controller
{
    public function indexBook(){
        $books = Book::all();
        return view('home')->with('books',$books);
    }

    public function requestBook($id){
        $book = Book::findOrFail($id);
        return view('request.book_request', compact('book', 'id'));
    }

    public function borrowBook(Request $request){

        // BookRequest::create($request->except('_token') + ['borrower_id' => Auth::id()]);
        // dd($request->all());

        $borrowRequest =new BookRequest();
        $borrowRequest->book_id = $request->input('book_id');
        $borrowRequest->borrower_id = $request->input('borrower_id');
        $borrowRequest->borrow_quantity = $request->input('borrow_quantity');
        $borrowRequest->borrow_status = $request->input('borrow_status');
        $borrowRequest->return_date = $request->input('return_date');
        $borrowRequest->save();
        return redirect('/home');

    }
}