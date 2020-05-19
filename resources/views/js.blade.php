@extends('layout')

@section("content")
 <h1>JS Pages</h1>
 @foreach($data as $value)
 <li>{{$value}}</li>
 @endforeach
@endsection