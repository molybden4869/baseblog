@extends('layouts.app')

@section('content')
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <div class='title'>
                <a href="/teams/{{ $post->team_id }}/posts/{{ $post->id }}"><h2 class='title_name'>{{ $post->title }}</h2></a>
                </div>
                <div class='detail'>
                    <div class='created_at'>投稿日時：{{ $post->created_at }}</div>
                    <div class='updated_at'>編集日時：{{ $post->updated_at }}</div>
                </div>
            <div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
@endsection