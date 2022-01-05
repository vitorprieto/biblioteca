<?php

namespace App\Http\Controllers;

use App\Models\BookInstance;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookInstanceController extends Controller
{
    /**
     * Only logged in users can have access
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_instances = BookInstance::paginate(15);

        return view('bookinstances.index')->with('book_instances', $book_instances);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        $users = User::all();

        return view('bookinstances.create')->with([
            'books' => $books,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book_instance = new BookInstance;

        $book_instance->due_back = $request->due_back;
        $book_instance->is_available = $request->is_available;
        $book_instance->book_id = $request->books;
        $book_instance->borrower_id = $request->users;
        $book_instance->save();

        return redirect()->route('bookinstances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookInstance  $bookInstance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book_instance = BookInstance::findOrFail($id);

        return view('bookinstances.show')->with('instance', $book_instance);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookInstance  $bookInstance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book_instance = BookInstance::findOrFail($id);
        $books = Book::all();
        $users = User::all();

        return view('bookinstances.edit')->with(
            [
                'book_instance' => $book_instance,
                'books' => $books,
                'users' => $users
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookInstance  $bookInstance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book_instance = BookInstance::findOrFail($id);
        $request->validate([
            'due_back' => 'required',
            'is_available' => 'required',
            'book_id' => 'required',
            'borrower_id' => 'required'
        ]);
        $book_instance->update($request->all());

        return redirect()->route('bookinstances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookInstance  $bookInstance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book_instance = BookInstance::findOrFail($id);
        $book_instance->delete();

        return redirect()->route('bookinstances.index');
    }
}
