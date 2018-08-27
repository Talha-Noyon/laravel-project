<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Product List</h2>
	<a href="{{route('home')}}">Back to Home</a> | 
	<a href="{{route('product.create')}}">Create New</a>
	<br/><br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>QTY</th>
			<th>DESC</th>
			<th>CATEGORY</th>
			<th>OPTIONS</th>
		</tr>
		@foreach($productlist as $product)
		<tr>
			<td>{{$product->product_id}}</td>
			<td>{{$product->product_name}}</td>
			<td>{{$product->price}}</td>
			<td>{{$product->quantity}}</td>
			<td>{{$product->description}}</td>
			<td>{{$product->category_name}}</td>
			<td><a href="{{route('product.edit', ['id'=> $product->product_id])}}">Edit</a> | <a href="{{route('product.delete', ['id'=> $product->product_id])}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>