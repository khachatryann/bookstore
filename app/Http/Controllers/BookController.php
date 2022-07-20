<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**-
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::select(
            'books.name',
            'books.author',
            'books.id',
            'books.pages_count',
            'books.qt',
            'books.created_at')
        ->get();


        return view('dash.books.index', ['books' => $books]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
          'name' => $request['name'],
          'author' => $request['author'],
          'pages_count' => $request['pages_count'],
          'qt' => $request['qt'],
        ];

        if($store = Book::create($data)) {
            return redirect()->route("books.index")->with('success', 'List created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $one_book = Book::select(
            'books.name',
            'books.author',
            'books.id',
            'books.pages_count',
            'books.qt',
            'books.created_at')
            ->where('books.id','=', $book['id'])
            ->get();
        $one_book = json_decode($one_book, true)[0];
        return view('dash.books.show', ['one_book' => $one_book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $one_book = Book::select(
            'books.name',
            'books.author',
            'books.id',
            'books.pages_count',
            'books.qt',
            'books.created_at')
            ->where('books.id','=', $book['id'])
            ->get();
        $one_book = json_decode($one_book, true)[0];
        return view('dash.books.edit', ['one_book' => $one_book]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = [
            'name' => $request['name'],
            'author' => $request['author'],
            'pages_count' => $request['pages_count'],
            'qt' => $request['qt'],
        ];

        $update  = $book->update($data);
        if($update) {
            return redirect()->route('books.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
       $delete =  $book->delete();
       if($delete) {
           return redirect()->route('books.index');
       }
    }
}
