@extends('layouts.app')

@section('title', '著書一覧ページ')
@section('description', '著書一覧ページのdescriptionです')

@section('content')
  <div class="page-header">
    <h1 class="page-name">著書一覧ページです。</h1>
    @if(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif
    <a href="{{ route('books.create') }}">新規登録</a>
  </div>
  <h2 class="page-wrapper">著書一覧</h2>
  <ul class="book-list">
    @foreach ($books as $book)
    <li>
      <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
      <div>著書：{{ $book->author->name }}</div>
      <div>コメント：{{ $book->comment }}</div>
    </li>
    @endforeach
  </ul>
@endsection
