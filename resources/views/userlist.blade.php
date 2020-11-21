<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="{{asset('/public/css/app.css')}}"  rel="stylesheet">
</head>
<body>
	<table border="1"  width="100%">
		<tr>
			<td>No .</td>
			<td>Name</td>
			<td>Email</td>
			<td>Address</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		@foreach($lstdata as $list_value)
		<tr><td>{{$list_value['id']}}</td><td>{{$list_value['name']}}</td><td>{{$list_value['email']}}</td><td>{{$list_value['address']}}</td>
			<td><a href={{"editlist/".$list_value['id']}} >Edit</a></td><td><a href={{"delete/".$list_value['id']}} >Delete</a></td></tr>
		@endforeach
	</table>
	<a href="user">Add Data</a>

</body>
</html>