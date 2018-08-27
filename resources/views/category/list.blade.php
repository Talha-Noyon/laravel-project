<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Category List</h2>
	<a href="{{route('home')}}">Back to Home</a> | 
	<a href="{{route('category.create')}}">Create New</a>
	<br/><br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>DESC</th>
			<th>OPTIONS</th>
		</tr>
		@foreach($catlist as $cat)
		<tr>
			<td>{{$cat->category_id}}</td>
			<td>{{$cat->category_name}}</td>
			<td>{{$cat->description}}</td>
			<td><a href="{{route('category.edit', ['id'=> $cat->category_id])}}">Edit</a> | <a href="{{route('category.delete', ['id'=> $cat->category_id])}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>