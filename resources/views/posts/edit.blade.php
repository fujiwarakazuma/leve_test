<x-app-layout>
    <h1>Blog Nmae</h1>
     <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="title">
          <h2>Title</h2>
          <input type="text" name="post[title]" placeholder="タイトル" value={{$post->title}}>
          <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
        </div>
        <div class="body">
          <h2>Body</h2>
          <textarea name="post[body]" id="" cols="30" rows="10" placeholder="今日も一日お疲れ様でした。">{{$post->body}}</textarea>
          <p class="body_error" style="color:red">{{$errors->first('post.body')}}</p>
        </div>
        <input type="submit" value="update">
     </form>
    <div class="footer">
        <a href="/posts/{{$post->id}}">戻る</a>
    </div>
</x-app-layout>