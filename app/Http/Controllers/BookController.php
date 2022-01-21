<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookFormRequest;
use App\Models\Author;
use App\Models\Book;

class BookController extends Controller
{
    public function Home()
    {
        $books = Book::all();

        return view("home", compact("books"));
    }

    public function Create(){
        $authors = Author::all();

        return view("create", compact("authors"));
    }

    public function SaveCreate(BookFormRequest $req){

        if($req -> hasFile("image") && $req -> file("image") -> isValid())
        {
            $file = time() . "." . $req -> file("image") -> getClientOriginalExtension();
            $req -> file("image") -> move(public_path('/uploads'), $file);
        }else{
            $file = "no-image.jpg";
        }

        $book = new Book();
        $book -> title = $req -> title;
        $book -> image = $file;
        $book -> page = $req -> page;
        $book -> price = $req -> price;
        $book -> author = $req -> author;
        $book -> description = $req -> description;
        $book -> save();

        return redirect("/");
    }

    public function Show($id){
        $book = Book::findOrFail($id);

        return view("show", compact("book"));
    }

    public function Edit($id){
        $book = Book::findOrFail($id);

        return view("edit", compact("book"));
    }

    public function Update(BookFormRequest $req, $id){
        $book = Book::find($id);
        
        if($req -> hasFile("image") && $req -> file("image") -> isValid())
        {
            $file = time() . "." . $req -> file("image") -> getClientOriginalExtension();
            $req -> file("image") -> move(public_path('/uploads'), $file);
        }else{
            $file = $book -> image;
        }

        $book -> title = $req -> title;
        $book -> image = $file;
        $book -> page = $req -> page;
        $book -> price = $req -> price;
        $book -> author = $req -> author;
        $book -> description = $req -> description;
        $book -> save();

        return redirect("/");
    }
    
    public function Remove($id){
        $book = Book::find($id);
        $book -> delete();

        return redirect("/");
    }
}