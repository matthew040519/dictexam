<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DICT EXAM</title>
</head>
<body>
    <form action="{{ route('addlocation') }}" method="POST">
        {{ csrf_field() }}
        <label for="">Location</label>
        <input type="text" name="location">
        <input type="submit" name="addlocation" value="Add Location">
    </form>
    <a href="/logout">logout</a>
    <ul>
		@foreach($place as $places)
		<li><a href='/viewmap?id={{ $places->id }}'>View Map of {{ $places->location }}</a> || <a href="/editmap?id={{ $places->id }}">Edit</a> || <a href="/dashboard?delete={{ $places->id }}">Delete</a></li>
		@endforeach
	</ul>
</body>
</html>