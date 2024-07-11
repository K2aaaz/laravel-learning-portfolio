@extends('layouts.app')

@section('title', 'トップページ')
@section('description', 'トップページのdescriptionです')

@section('content')
  <h1 class="page-name">トップページです。</h1>
  <h2 class="">一覧ページ</h2>
  <ul class="list-group">
    <li class="list-item"><a href="{{ route('users.index') }}" class="link">ユーザー</a></li>
    <li class="list-item"><a href="{{ route('books.index') }}" class="link">著書</a></li>
  </ul>
@endsection
