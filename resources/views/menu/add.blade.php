<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Name</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<h1>Restaurant</h1>
<body>
	@if(session()->has('message'))
    <p class="alert {{ session()->get('alert-class', 'alert-info') }}">{{ session()->get('message') }}</p>
  @endif
	<form action="{{route('menu-post')}}" method="post">
		{{csrf_field()}}
		<div class="form-group">
      <label for="address">Restaurant Name</label>
      <select  class="form-control" name="restaurant" style="height: 50px;">
        <option value="">--select a name--</option>
          @foreach($restaurants as $restaurant)
          <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
          @endforeach
      </select>
    </div>
       
    <div class="form-group">
      <label for="address">Food Name</label>
      <select  class="form-control" name="food" style="height: 50px;">
     		<option value="">--select  food--</option>
	        @foreach($foods as $food)
          <option value="{{$food->id}}">{{$food->name}}</option>
          @endforeach
  	 	</select>
    </div>

    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="name"  name="price" placeholder="Price">
    </div>

    <div class="form-group">
      <label for="discount">Discount</label>
      <input type="text" class="form-control" id="name"  name="discount" placeholder="Discount">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
	<form>
</body>
</html>