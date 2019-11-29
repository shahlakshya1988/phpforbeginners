<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML Table</title>
	<style>
		table,th,td{
			border:1px solid grey;
		}
	</style>
</head>
<body>
	<h1>Table</h1>
	<table>
		<thead>
			<tr>
				<th>Thead Col 1</th>
				<th>Thead Col 2</th>
				<th>Thead Col 3</th>
				<th>Thead Col 4</th>
				<th>Thead Col 5</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Row 1, Col 1</td>
				<td>Row 1, Col 2</td>
				<td>Row 1, Col 3</td>
				<td>Row 1, Col 4</td>
				<td>Row 1, Col 5</td>
			</tr>
			<tr>
				<td>Row 2, Col 1</td>
				<td>Row 2, Col 2</td>
				<td>Row 2, Col 3</td>
				<td>Row 2, Col 4</td>
				<td>Row 2, Col 5</td>
			</tr>
			<tr>
				<td>Row 3, Col 1</td>
				<td>Row 3, Col 2</td>
				<td>Row 3, Col 3</td>
				<td>Row 3, Col 4</td>
				<td>Row 3, Col 5</td>
			</tr>
			<tr>
				<td>Row 4, Col 1</td>
				<td>Row 4, Col 2</td>
				<td>Row 4, Col 3</td>
				<td>Row 4, Col 4</td>
				<td rowspan="2">Row 4, Col 5</td>
			</tr>
				<tr>
				<td>Row 5, Col 1</td>
				<td>Row 5, Col 2</td>
				<td>Row 5, Col 3</td>
				<td>Row 5, Col 4</td>
			</tr>
			<tr>
				<td colspan="2">Row 6, Col 1</td>
				<td>Row 6, Col 3</td>
				<td>Row 6, Col 4</td>
				<td>Row 6, Col 5</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td>Tfoot Col 1</td>
				<td>Tfoot Col 2</td>
				<td>Tfoot Col 3</td>
				<td>Tfoot Col 4</td>
				<td>Tfoot Col 5</td>
			</tr>
		</tfoot>

	</table>
</body>
</html>