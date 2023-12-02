<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <h1>Blog Name</h1>
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="title">
            <h2>Title</h2>
            <input type="text" name=post[title] placeholder="タイトル" value="{{ $post->title }}">
            <p class="title_error" style="color:blue">{{ $errors->first('post.title') }}</p>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="今日も1日おつかれ！">{{ $post->body }}</textarea>
            <p class="body_error" style="color:blue">{{ $errors->first('post.body') }}</p>
        </div>
        <input type="submit" value="update">
    </form>
        <div class="footer">
            <a href="/posts{{ $post->id }}">戻る</a>
        </div>
    </body>
</html>