<!DOCTYPE>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Survey Form</title>
		<style>
			form {
				width: 500px;
				height: 400px;
				border: 1px solid black;
			}
			li {
				list-style-type: none;
				margin-bottom: 5px;
			}
			input, select {
				width: 150px;
				float: right;
				margin-right: 50px;
			}
			textarea {
				width: 450px;
				height: 200px;
			}
		</style>
	</head>
	<body>
		<form action="result.php" method="post">
			<ul>
				<li><label for="full_name">Your Name:</label> <input type="text" name="full_name"></li>
				<li><label for="dojo_loc">Dojo Location:</label>
					<select name="dojo_loc">
						<option value="la">Los Angeles</option>
						<option value="seattle">Seattle</option>
						<option value="sv">Silicon Valley</option>
					</select></li>
				<li><label for="fav_lang">Favorite Language:</label>
					<select name="fav_lang">
						<option value="css">CSS</option>
						<option value="html">HTML</option>
						<option value="js">Javascript</option>
						<option value="php">PHP</option>
						<option value="ruby">Ruby</option>
					</select></li>
				<li><label for="comment">Comment (optional):</label> <textarea name="comment"></textarea></li>
			</ul>
				<input type="submit" name="submit">
		</form>
	</body>
</html>