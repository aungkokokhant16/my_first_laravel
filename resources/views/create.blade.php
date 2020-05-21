@extends('layout')

@section('content')

 <div class="container">
 	
 
 <h2>Add new Receipe</h2>

 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div>
 	<form method="POST" action="/receipe">

 		{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Receipe Name</label>
    <input type="text" class="form-control" name="name" id=""  value="{{old('name')}}" required="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ingredients</label>
    <input type="text" class="form-control" name="ingredients" id="" value="{{old('ingredients')}}" required="">
  </div>
  <div class="form-group ">
  	<label class="form-check-label" for="exampleCheck1">Category</label>
    <input type="text" class="form-control" name="category" id=""  value="{{old('category')}}" required="">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</div>

@endsection