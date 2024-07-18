@extends('layouts.app')

@section('title', 'ユーザー一覧ページ')
@section('description', 'ユーザー一覧ページのdescriptionです')

@section('content')
  <h1 class="page-name">ユーザー一覧ページです。</h1>
  <h2 class="page-wrapper">ユーザー一覧</h2>
    <ul class="user-list">
      @foreach ($users as $user)
      <li>
        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
        <div>所属企業：{{ $user->company->name }}</div>
        <div>著書数：{{ $user->books->count() }}</div>
      </li>
      @endforeach
    </ul>
@endsection
