<?php
session_start();
include('db.php');
if(!isset($user)) {
	header("Location: login.php");
}

$msg = '';

if(isset($_POST['change_role'])) {
	$user_role = $_POST['role'];
	$id = $_POST['change_role'];

	$upateRole = $db->query("UPDATE users SET role = '$user_role' WHERE id = '$id'");

	if($upateRole) {
		$msg = "User role updated successfully";
		echo $refresh;
	} else {
		$msg = "Role update failed";
	}
}
if(isset($_POST['delete_user'])) {
	$id = $_POST['delete_user'];
	$deleteUser = $db->query("DELETE FROM users WHERE id = '$id'");
	if($deleteUser) {
		$msg = "User deleted successfully";
		echo $refresh;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title><?php echo $role;?> Dashboard</title>

</head>
<body>

<?php include 'navbar.php'; ?>

<?php if($role == 'Admin') { ?>

<div class="container mt-3">

<h2>User & Role Management</h2>  
<h5 class="text-success"><?php echo $msg; ?></h5>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
		<th>Current Role</th>
		<th>New Role</th>
      </tr>
    </thead>
    <tbody>

	<?php
	if ($all_users->num_rows > 0) {
	while($user = $all_users->fetch_assoc()) { ?>
	
		<tr>
		<td><?php echo $user['id'] ?></td>
        <td><?php echo $user['username'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['role']; ?></td>
		<td>
			<form action="" method="post">
			<select name="role" id="" class="form-control">
			<option value="Admin">Admin</option>
			<option value="Manager">Manager</option>
			<option value="User">User</option>
			</select>
		</td>
		<!-- <td><a href="" class="btn btn-success">Change Role</a> <a href="" class="btn btn-danger">Delete</a></td> -->
		<td><button type="submit" name="change_role" value="<?php echo $user['id'] ?>" class="btn btn-success">Change Role</button> <button type="submit" name="delete_user" value="<?php echo $user['id'] ?>" class="btn btn-danger">Delete User</button></td>
		</form>
      	</tr>

	<?php }
} else {
		echo "No users found";
}
?>

    </tbody>
  </table>
</div>

<?php } else {
	echo "You don't have permission to access this page";
} ?>

</body>
</html>