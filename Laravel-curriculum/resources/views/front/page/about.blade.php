@extends ('layouts.app')

@section('title', 'aboutページ')
@section('description', 'aboutページのdescriptionです')

@section('content')
  <h1 class="page-name">aboutページです。</h1>
  <h2 class="user-list-title">ユーザー一覧</h2>
  <div class="user-list">
  @foreach ($users as $user)
    <div class="user-item">
      <p class="user-item-name">{{ $user->name }}</p>
      <p class="user-item-company">所属企業：{{ $user->company->name ?? '未所属' }}</p>
    </div>
  @endforeach
  </div>
@endsection
