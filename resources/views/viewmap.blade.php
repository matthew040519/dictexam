<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DICT Exam</title>
</head>
<body>
    <h1>{{ $location->location }}</h1>
	<a href="/dashboard">back</a>
	<div style="text-decoration:none; overflow:hidden;max-width:100%;width:500px;height:350px;">
        <div id="embed-ded-map-canvas" style="height:100%; width:100%;max-width:100%;">
            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q='{{ $location->location }}',+Philippines&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
            </iframe></div><a class="my-codefor-googlemap" href="https://www.bootstrapskins.com/themes" id="get-data-for-embed-map">premium bootstrap themes</a>
            <style>#embed-ded-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
</body>
</html>