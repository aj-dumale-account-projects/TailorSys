<!DOCTYPE html>
<html>
<head>
	<title>TailorTech Sign-Up</title>
	<style>
		body {
			background-image: url('libs/images/tailor-background.jpg');
			background-size: cover;
			background-position: center;
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
			color: #333333;
			line-height: 1.5;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 500px;
			margin: 50px auto;
			padding: 20px;
			background-color: rgba(255, 255, 255, 0.8);
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
		}
		h1 {
			font-size: 32px;
			font-weight: 700;
			text-align: center;
			margin-bottom: 30px;
		}
		label {
			display: block;
			font-size: 18px;
			font-weight: 500;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="email"], input[type="password"] {
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #CCCCCC;
			font-size: 16px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #2C3E50;
			color: #FFFFFF;
			padding: 10px;
			border-radius: 5px;
			border: none;
			font-size: 18px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #34495E;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1>TailorTech Sign-Up</h1>
		<form>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email Address:</label>
			<input type="email" id="email" name="email" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Sign Up">
		</form>
	</div>
</body>
</html>
