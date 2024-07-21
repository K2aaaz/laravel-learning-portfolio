@extends('layouts.app')

@section('title', '著書詳細ページ')
@section('description', '著書詳細ページのdescriptionです')

@section('content')
  <h1 class="page-name">著書詳細ページです。</h1>
  <a href="{{ route('books.edit', ['book' => $book->id]) }}">編集</a>
@endsection
