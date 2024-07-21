@extends('layouts.app')

@section('title', '著書一覧ページ')
@section('description', '著書一覧ページのdescriptionです')

@section('content')
  <h1 class="page-name">著書一覧ページです。</h1>
  <a href="{{ route('books.create') }}">新規登録</a>
@endsection
