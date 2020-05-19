@extends('layout')

<h3>Home Page</h3>
@section("content")
 @foreach($data as $value)
 	<li>Name -- {{ $value->name }}</li>
 	<li>Ingredients -- {{ $value->ingredients }}</li>
 	<li>Category -- {{ $value->category }}</li>
 	<hr>
 @endforeach	
@endsection