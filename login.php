<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="project.css">
	<title>Login form</title>
	<style>
		div.lc{
			border: 1px solid black;
			display: grid;
			grid-auto-columns:   49vw 49vw;
			margin: 0;
		}

		div.l1{
			border: 1px solid black;
			margin: 0;
			width: 40vw;

		}
		div.l2{
			border: 1px solid black;
			margin: 0;
			width: 40vw;


		}
	</style>
</head>
<body>
							<!-- login -->
	<h1><b>Login form or Create Form</b></h1>
	<div class="lc">
		<div class="l1">			
				<h1><b>Already Member</b></h1>

			<form method="POST" action="includes/login_validation.php" >
					<table>
					<tr>
						<td><label for="userName">User Name:</label></td>
						<td><input type="text" name="user_name" placeholder="User Name.." ></td>
					</tr>
					<tr>
						<td><label for="password">Password:</label></td>
						<td><input type="password" name="pwd" placeholder="****" ></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="login" value="login">
						</td>
					</tr>
				</table>
			</form>
		</div>
								<!-- create -->
		<div class="l2">
			<div class="create">
				<h1><b>Not a member till now.</b></h1>
				<table>
			<tr>
				<td><label for="fullname">Full Name:</label></td>
				<td><input type="text" name="full_name"></td>
			</tr>

			<tr>
				<td><label for="username">User Name:</label></td>
				<td><input type="text" name="user_name"></td>
			</tr>

			<tr>
				<td><label for="password">Password:</label></td>
				<td><input type="password" name="pwd"></td>
			</tr>

			<tr>
				<td><label for="gender">Gender:</label></td>
				<td><input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Rather Not Say">Rather Not Say

				</td>
			</tr>
			<tr>
				<td><input type="button" name="create"></td>
			</tr>
			</table>
		</div>
			
		</div>
	</div>		
</body>
</html>
					