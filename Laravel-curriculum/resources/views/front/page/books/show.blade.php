@extends('layouts.app')

@section('title', '著書詳細ページ')
@section('description', '著書詳細ページのdescriptionです')

@section('content')
  <div class="page-header">
    <h1 class="page-name">著書詳細ページです。</h1>
    <a href="{{ route('books.edit', ['book' => $book->id]) }}">編集</a>
  </div>
  <h2 class="page-wrapper">著書詳細</h2>
  <ul class="book-details">
    <li>
      <div>{{ $book->title }}</div>
      <div>著書：{{ $book->author->name }}</div>
      <div>コメント：{{ $book->comment }}</div>
      <form action="{{ route('books.destroy', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>削除</button>
      </form>
    </li>
  </ul>
@endsection
