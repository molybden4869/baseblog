@extends('layouts.app')

@section('content')
    <div class='posts'>
        @foreach ($posts as $post)
        <div class='post'>
            <div class='title'>
                <a href="/teams/{{ $post->team_id }}/posts/{{ $post->id }}"><h2 class='title_name'>{{ $post->title }}</h2></a>
            </div>
            <div class='detail'>
                <div class='detail-1'>
                    <p>投稿者：{{ $post->user->name }}</p>
                    <p>投稿日時：{{ $post->created_at }}</p>
                </div>
                <div class='detail-2'>編集日時：{{ $post->updated_at }}</div>
            </div>
            <div class='body'>{{ Str::limit($post->body, 30) }}</div>
        <div>
        <div class=dumy-post></div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
@endsection