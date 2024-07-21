@extends('layouts.app')

@section('title', '著書登録ページ')
@section('description', '著書登録ページのdescriptionです')

@section('content')
<div class="container">
  <h1 class="page-name">著書登録ページです。</h1>
  <h2 class="page-wrapper">著書登録</h2>
  <form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label class="form-label" for="title">著書名</label>
      <input class="form-input" type="text" id="title" name="title" required placeholder="タイトルを入力してください">
    </div>
    <div class="form-group">
      <label class="form-label" for="author">著者名</label>
      <select class="form-select" id="author" name="author_id" required>
        <option value="">著者を選択してください</option>
        @foreach($users as $user)
          <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label class="form-label" for="comment">コメント</label>
      <textarea class="form-textarea" id="comment" name="comment" placeholder="本文を入力してください"></textarea>
    </div>
    <button type="submit">投稿</button>
    <button type="button" onclick="window.location.href='{{ url()->previous() }}'">キャンセル</button>
  </form>
</div>
@endsection
