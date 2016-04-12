<?php

	include("connection.php");
	include("submit.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="../registration/style.css">
</head>

<body>
<div align="center">
	<h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:32px;">Photo Commenter Registration</h1>
	<div class="loginBox">
	<form method="post" action="">
		<fieldset>
		<legend>Registration Form</legend>
			<table width="400" border="0" cellpadding="10" cellspacing="10">
				<tr>
					<td colspan="2" align="center" class="error"><?php echo $msg;?></td>
				</tr>
				<tr>
					<td style="font-weight: bold">
							<div align="right"><label for="name">Username</label></div>
					</td>
					<td>
							<input name="name" type="text" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td style="font-weight: bold">
							<div align="right">
									<label for="email">Email</label>
							</div>
					</td>
					<td>
							<input name="email" type="email" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold">
							<div align="right">
								<label for="password">Password</label>
							</div>
					</td>
					<td>
							<input name="password" type="password" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td height="23"></td>
					<td>
						<div align="right">
				  		<input type="submit" name="submit" value="Register!" />
						</div>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
		</div>
	</div>
</body>
</html>
