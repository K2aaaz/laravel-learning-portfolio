<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="expires" content="604800">
  <meta name="format-detection" content="email=no,telephone=no,address=no">
  <title>
    @hasSection('title')
      @yield('title')
    @else
      デフォルトのタイトル
    @endif
  </title>
  <meta name="description" content="トップページのdescriptionです">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
