@extends('layouts.app')
   
@section('content')
    <div class='explanation'>
        <p>「野球」がテーマのブログサイトです </p>
        <p> 野球場に行った感想やテレビ観戦での感想、美味しかった球場のご飯</p>
        <p> 選手の最新情報、野球のデータに関すること など野球に関することを書いて共有しよう！！</p>
    </div>
    
    <div class='team_list'>
        <div class='leagues'>
        @foreach ($leagues as $league)
            <div class='league'>{{ $league->name }}</div>
            <div class='teams'>
                @foreach ($teams as $team)
                    @if ($league->id == $team->league_id)
                        <div class='team'><a href="/teams/{{ $team->id}}">{{ $team->name }}</a></div>
                    @endif
                @endforeach
            </div>
        @endforeach
        </div>
    </div>
@endsection

 