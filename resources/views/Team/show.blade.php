@extends('layouts.app')

@section('content')
    <div class="post-show">
        <div class="head-show">
            <h1 class="title-show">{{ $post->title }}</h1>
            <div class="detail-show">
                <div class="detail-1">
                    <p>投稿者：{{ $post->user->name }}</p>
                    <p>投稿日時：{{ $post->created_at }}</p>
                </div>
                <div class="detail-2-show">
                    編集日時：{{ $post->updated_at }}
                </div>
            </div>
        </div>
        <div class="body_show">
            <p class="content">{!! nl2br(e($post->body)) !!}</p>
        </div>
        @if ($post->user_id == Auth::id())
            <div class="button-auth">
                <button type="submit" class="btn btn-primary" onclick="location.href='/teams/{{ $team->id }}'">
                    戻る
                </button>
                <button type="submit" class="btn btn-primary" onclick="location.href='/teams/{{ $team->id }}/posts/{{ $post->id }}/edit'">
                    編集
                </button>
                <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-primary" onclick="return deletePost(this);">
                        削除
                    </button>
                </form>
            </div>
        @else
            <div class="button">
                <button type="submit" class="btn btn-primary" onclick="location.href='/teams/{{ $team->id }}'">
                    戻る
                </button>
            </div>
        @endif
    </div>
    <script>
        function deletePost(e) {
            if (confirm('本当に削除しますか？')) {
                document.getElementById('form_delete').submit();
            }
        }
    </script>
@endsection
