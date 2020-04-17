<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
<form method="post" action="{{ route('contact') }}">
	<input type="text" name="name" placeholder="name">
	<input type="text" name="email" placeholder="email">
	<textarea name="massege"></textarea>
	<button type="submit">Submit</button>
</form>



</body>
</html>