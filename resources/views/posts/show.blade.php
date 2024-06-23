<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <title>Post</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class='antialiased'>
     <h1 class="title">
            {{ $post->title }}
    </h1>
    <div class="content">
        <div class="content__post">
            <h3>本文</h3>
            <p>{{ $post->body }}</p>    
        </div>
    </div>
    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
    <div class="edit">
        <a href="/posts/{{$post->id}}/edit">edit</a>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>