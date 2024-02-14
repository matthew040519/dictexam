<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="{{ route('login_user') }}">
		{{ csrf_field() }}
		<input type="email" name="email" placeholder="email">
		<input type="password" name="password" placeholder="password">
		<input type="submit" value="login" name="login_user">
	</form>
</body>
</html>