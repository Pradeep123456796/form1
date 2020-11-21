<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="import-excel"  enctype="multipart/form-data" >
		@csrf
		<table>
			<tr>
				<td>
					Import Excel
				</td>
				<td>
					<input type="file" name="file">
				</td>

			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="ImportExcel" >
				</td>
			</tr>
		</table>
	</form>

</body>
</html>