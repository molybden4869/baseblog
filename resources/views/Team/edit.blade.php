<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>baseblog</title>
    </head>
    <body>
        <h1>べーすぶろぐ</h1>
        <p>「野球」がテーマのブログサイトです </p>
        <p> 野球場に行った感想やテレビ観戦での感想、美味しかった球場のご飯</p>
        <p> 選手の最新情報、野球のデータに関すること など野球に関することを書いて共有しよう！！</p>
        
        <form action='/posts/ {{ $post->id }}' method="POST">
            @csrf
            @method('PUT')
            <div class="team">
                <h4>チームの選択</h4>
                <select name="post[team_id]" value="{{ old('post.team_id') }}">
                    @foreach ($team_lists as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                <p class="title_error" style="color:red">{{ $errors->first('post.team_id') }}</p>
            </div>
            <div class="title">
                <h4>タイトル</h4>
                <input type="text" name="post[title]" placeholder="タイトルを記入" value="{{ $post->title }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h4>本文</h4>
                <textarea name="post[body]" placeholder="本文を記入">{{ $post->body }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="編集"/>
            <div class='back'>[<a href="/teams/{{ $team->id }}/posts/{{ $post->id }}">戻る</a>]</div>
    </body>
</html>
