@extends('index_master')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>halaman index ini</p>
    @if (Auth::user())
    <h4>Selamat Datang <b id="username">{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->level}}</b>.</h4>
    @endif
</body>
</html>
@endsection