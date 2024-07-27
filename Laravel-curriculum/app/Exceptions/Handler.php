//<?php
//
//namespace App\Exceptions;
//
//use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
//use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Throwable;
//
//class Handler extends ExceptionHandler
//{
//  public function register(): void
//  {
//    $this->renderable(function (ModelNotFoundException $e, $request) {
//      \Log::error('リソースが見つかりません：' . $e->getMessage());
//      return redirect()->route('books.index')->with('error', '指定されたリソースが見つかりませんでした。');
//    });
//  }
//}
