@extends('layouts.app')

@section('title', 'トップページ')
@section('description', 'トップページのdescriptionです')

@section('content')
  <h1 class="page-name">トップページです。</h1>
  <h2>一覧ページ</h2>
  <ul class="list-group">
    <li><a href="{{ route('users.index') }}">ユーザー</a></li>
    <li><a href="{{ route('books.index') }}">著書</a></li>
  </ul>
@endsection
