<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Product Name</th>
			<th>Product Iamge</th>
			<th>Product  Category</th>

		</tr>

		@foreach ($product_list_array as $pdfvalue )
		
		<tr>
			<td> {{$pdfvalue['id']}} </td>
			<td> {{$pdfvalue['product_name']}} </td>
			<td> {{$pdfvalue['product_image']}} </td>
			<td> {{$pdfvalue['category_name']}} </td>
		</tr>

		@endforeach
	</table>

</body>
</html>