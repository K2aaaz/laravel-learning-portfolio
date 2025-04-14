@extends('layouts.app')

@section('title', 'ユーザー詳細ページ')
@section('description', 'ユーザー詳細ページのdescriptionです')

@section('content')
  <h1 class="page-name">ユーザー詳細ページです。</h1>
  <h2 class="page-wrapper">ユーザー詳細</h2>
  <ul class="user-details">
    <li>
      <div>{{ $user->name }}</div>
      <div>所属企業：{{ $user->company->name }}</div>
      <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>削除</button>
      </form>
    </li>
  </ul>
  <h2 class="page-wrapper">著書一覧</h2>
    <ul class="user-books-list">
      @if ($user->books->isEmpty())
        <li>著書はありません</li>
      @else
        @foreach ($user->books as $book)
          <li>
            <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
            <div>コメント：{{ $book->comment }}</div>
          </li>
        @endforeach
      @endif
    </ul>
@endsection
