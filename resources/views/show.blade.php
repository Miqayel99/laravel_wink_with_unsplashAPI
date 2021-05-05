<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title  }}</title>
    {{-- <link rel="stylesheet"href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.14.1/build/styles/github.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/dracula.min.css" />
</head>
<body>
<div class="container">
    <h2>{{ $post->title  }}</h2>
    <div class="col-lg-12 col-md-12 col-sm-12">
    {!! $post->body !!}
    </div>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>


    <script>
        (function(){
            hljs.initHighlightingOnLoad();
            let targets = document.querySelectorAll('pre')
            targets.forEach(target => {
                hljs.highlightBlock(target)
            })
        })();
    </script>
</body>
</html>
