<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Index</title>
</head>
<body>
        @foreach($posts as $post)
            <div>
                <a href="{{ url($post->slug)  }}"><h2>{{ $post->title  }}</h2></a>
                <h3>{{ $post->excerpt  }}</h3>
            </div>
        @endforeach
</body>
</html>
