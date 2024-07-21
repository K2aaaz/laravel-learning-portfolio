<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class BookController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $books = Book::all();
    return view('front.page.books.index', ['books' => $books]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $users = User::select('id', 'name')->orderBy('name')->get();
    return view('front.page.books.create', ['users' => $users]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validateData = $request->validate([
      'title' => 'required|max:255',
      'author_id' => 'required|exists:users,id',
      'comment' => 'nullable|string',
    ]);

    $book = Book::create($validateData);
    return redirect()->route('books.show', $book->id);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
      $book = Book::with('author')->findOrFail($id);
      return view('front.page.books.show', ['book' => $book]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $book = Book::findOrFail($id);
    $users = User::all();
    return view('front.page.books.edit', ['book' => $book, 'users' => $users]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $book = Book::findOrFail($id);
    $book->update($request->all());
    return redirect()->route('books.show', $book->id);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $book = Book::findOrFail($id);
    $book->delete();
    return redirect()->route('books.index');
  }
}
