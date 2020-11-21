<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/editlist" method="post">
		@csrf
	<table border="1" align="center">
		<tr>
			<input type="hidden" name="id" value="{{$edit_data['id']}}">
			<td>
				Name <input type="text" name="name" value="{{$edit_data['name']}}" >
			</td>
		</tr>
		<tr>
			<td>
				Email <input type="text" name="email" value="{{$edit_data['email']}}" >
			</td>
		</tr>
		<tr>
			<td>
				Address <input type="text" name="address" value="{{$edit_data['address']}}">
			</td>
		</tr>
		<tr>
			<td>
				 <input type="submit"  value="Update">
			</td>
		</tr>
	</table>
</form>

</body>
</html>