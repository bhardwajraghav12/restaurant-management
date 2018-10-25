<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	@if(session()->has('message'))
    <p class="alert {{ session()->get('alert-class', 'alert-info') }}">{{ session()->get('message') }}</p>
  @endif
	<form action="{{route('restaurants-post')}}" method="post">
		{{csrf_field()}}
		<div class="form-group">
      <label for="name"> Restaurant Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" placeholder="Name">
    </div>
       
    <div class="form-group">
      <label for="address">Address</label>
      <textarea name="address" id="address" class="form-control" placeholder="Address"></textarea>
    </div>

    <div class="form-group">
      <select multiple="multiple" class="form-control" name="categories[]" style="height: 200px;">
     		<option value="">--select a categories--</option>
     		@foreach($categories as $category)
     			<option value="{{$category->id}}">{{$category->name}}</option>
  	 		@endforeach
  	 	</select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
	<form>
</body>
</html>