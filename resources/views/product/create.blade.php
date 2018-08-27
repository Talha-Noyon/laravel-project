<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Create Product</h2>
	<a href="{{route('product.list')}}">Back to List</a>
	<br/><br/>
	<form method="post">
		<table>
			<tr>
				<td>NAME</td>
				<td><input type="text" name="product_name"></td>
			</tr>
			<tr>
				<td>PRICE</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>QTY</td>
				<td><input type="text" name="qty"></td>
			</tr>
			<tr>
				<td>DESC</td>
				<td><input type="text" name="desc"></td>
			</tr>
			<tr>
				<td>CATEGORY</td>
				<td>
					<select name="catid">
						@foreach($catlist as $cat)
							<option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save"></td>
			</tr>
		</table>
	</form>

	@if($errors->any())
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
	@endif
</body>
</html>