@extends('layouts.app')

@section('title', 'トップページ')
@section('description', 'トップページのdescriptionです')

@section('content')
  <h1 class="page-name">トップページです。</h1>
  <h2 class="company-list-title">企業一覧</h2>
  <div class="company-list">
  @foreach ($companies as $company)
    <p class="company-item">{{ $company->name }}</p>
  @endforeach
  </div>
@endsection
