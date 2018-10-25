<!DOCTYPE html>
<html>
<head>
	<title>Restaurant List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<h1>Restaurants</h1>
  <h2 style="float: right"><a href="{{route('restaurants-add')}}" class="btn btn-primary">Add</a></h2>
 	<table width="100%" class="table table-striped table-bordered table-hover" id="teachersList">
  	<thead>
      <tr>
        <th>Restaurant Name</th>
        <th>Address</th>
        <th>Categories</th>
        <th>Action</th>
        <th>
      </tr>
    </thead>
    <tbody>      
    	@foreach($restaurants as $restaurant)     
      <tr class="odd gradeX">
        <td>{{$restaurant->name}}</td>
        <td>{{$restaurant->address}}</td>
        <td>
          @foreach($restaurant->categories as $category)
            @if ($loop->last)
              {{$category->details->name}}.
            @else
              {{$category->details->name}}, 
            @endif
            {{-- {{$category->details->name}},    --}}
          @endforeach
        </td>
        <td>
         <button type="submit" class="btn btn-primary">View Map</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>