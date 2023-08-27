<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $book = Book::all();
        return view('index',['book'=> $book]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'image' => 'required',
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName); // Move the uploaded image to the 'uploads' folder
            $data['image'] = $imageName; // Store the image filename in the database
        }

        $newBook = Book::create($data);

        return redirect(route('index'))->with('success', 'Book addedd successfully'); ;
        
    }

    public function delete(Book $book) {
        $book->delete();
    
        return redirect()->route('index')->with('success', 'Book deleted successfully'); 
    }

    public function edit(Book $book){
        return view('edit', ['book' => $book]);
    }

    public function update(Book $book, Request $request){
        $data = $request->validate([
            'image' => 'required',
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $book->update($data);
        return redirect(route('index'))->with('success', 'Book update successfully'); ;

    }
}
