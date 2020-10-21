<!DOCTYPE html>
<html lang="ja">
  <head>
　　<meta charset="UTF-8">
　　@isset($title)
    <title>{{ $title }} - ゲーム風野球能力変換サイト</title>
    @else
    <title>ゲーム風野球能力変換サイト</title>
    @endisset
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{  asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{  asset('css/contact.css') }}" /> 
    <link rel="stylesheet" href="{{  asset('css/admininformation.css') }}" />

  </head>
  
  
  
  <body>