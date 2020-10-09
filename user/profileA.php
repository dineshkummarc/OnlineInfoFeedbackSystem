<?php
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);
?>

<h2 align="center">Your Profile Dude</h2>

	<?php 
			$q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
			$row=mysqli_fetch_assoc($q);
			if($row['image']=="")
			{
			?>
            <li><a href="#"><img style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
			else
			{
			?>
			<li><a href="#"><img style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
			<?php 
			}
	?>



		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Your name</td>
					<td><?php echo $users['name'];?></td>
				</tr>
				<tr>
					<td>Email </td>
					<td><?php echo $users['email'];?></td>
				</tr>
				
				
				<tr>
					<td>Mobile </td>
					<td><?php echo $users['mobile'];?></td>
				</tr>
				
				<tr>
					<td>Gender</td>
				<td><?php echo $users['gender'];?></td>
				</tr>
				
				<tr>
					<td>Hobby</td>
					<td><?php echo $users['hobbies'];?></td>
				</tr>
				
				
				<tr>
					<td>Date Of Birth</td>
					<td><?php echo $users['dob'];?></td>
				</tr>
			</table>
		</form>
	