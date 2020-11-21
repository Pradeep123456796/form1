<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

	<form action="user" style="color: blue;" method="POST">
		@csrf
		<table align="center">
			<h1 align="center" >Add Member</h1>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email Id</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
			
				<td align="center" colspan="2"><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>

</body>
</html>