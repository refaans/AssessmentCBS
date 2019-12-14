<!DOCTYPE html>
<html>
<head>
	<title>DB Test</title>
</head>
<body>
	<h1>DB Test</h1>

	<table border="1">
		<tr>
			<th>ID</th>			
			<th>Attendance</th>
			<th>Cognitive</th>
			<th>Psychomotor</th>
			<th>Affective</th>
			<th>Status</th>
		</tr>

		<?php foreach($nilai as $id){ ?>
			<tr>
				<td><?php echo $id->id ?></td>
				<td><?php echo $id->att ?></td>
				<td><?php echo $id->kog ?></td>
				<td><?php echo $id->psi ?></td>
				<td><?php echo $id->afe ?></td>
				<td><?php echo $id->status ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>