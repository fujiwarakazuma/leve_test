<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <title>Post</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class='antialiased'>
    <h1>Blog Nmae</h1>
     <form action="/posts" method="POST">
        @csrf
        <div class="title">
          <h2>Title</h2>
          <input type="text" name="post[title]" placeholder="タイトル" value={{old('post.title')}}>
          <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
        </div>
        <div class="body">
          <h2>Body</h2>
          <textarea name="post[body]" id="" cols="30" rows="10" placeholder="今日も一日お疲れ様でした。">{{old('post.body')}}</textarea>
          <p class="body_error" style="color:red">{{$errors->first('post.body')}}</p>
        </div>
        <input type="submit" value="store">
     </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>