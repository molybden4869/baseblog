<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>baseblog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"
        >
    </head>
    <body>
        <h1>べーすぶろぐ</h1>
        <p>「野球」がテーマのブログサイトです </p>
        <p> 野球場に行った感想やテレビ観戦での感想、美味しかった球場のご飯</p>
        <p> 選手の最新情報、野球のデータに関すること など野球に関することを書いて共有しよう！！</p>
        
        @if ($post->user_id == Auth::id())
            <div class='edit'>[<a href="/teams/{{ $team->id }}/posts/{{ $post->id }}/edit">編集</a>]</div>
        @endif
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            <p class='body'>{{ $post->body }}</p>
            <p class='updated_at'>{{ $post->updated_at }}</p>
        </div>  
        <div class='back'>[<a href="/teams/{{ $team->id }}">戻る</a>]</div>
    </body>
</html>
