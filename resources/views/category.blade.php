<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="category">
			@csrf
		<table>
			<tr>
				<td>
				Ctaegory Name
			</td>
			<td>
				<input type="text" name="category_name">
			</td>
			<td>
				<input type="submit" name="save">
			</td>
			</tr>
		</table>
	</form>

</body>
</html>