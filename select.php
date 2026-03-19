<?php
	$a = mysqli_connect("localhost","root","","table");
	$sql ="select *from deta";
	$data = mysqli_query($a,$sql);

?>
<table border="1px solid pink;">
	<tr>
		<td>id<td>
		<td>name</td>
		<td>email</td>
	</tr>
	
<?php
	while($row = mysqli_fetch_assoc($data))
	{
	
?>
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['email'] ?></td>
		</tr>

	<?php } ?>
	