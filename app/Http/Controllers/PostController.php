<?php

namespace App\Http\Controllers;

use App\Post;
use App\Team;
use App\User;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index(Team $team, Post $post)
    {
        $posts = Team::find($team->id)->posts();
        return view('Team.index')->with(['posts' => $posts->orderBy('updated_at', 'DESC')->paginate(2),
        'team' => $team]);
    }
    
    public function show(Team $team, Post $post)
    {
        return view('Team.show')->with(['team' => $team, 'post' => $post]);
    }
    
    public function create()
    {
        $teams = new Team;
        $team_lists = $teams->getTeamLists()->prepend('チームを選択', '');
        return view('create')->with(['team_lists' => $team_lists]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input);
        $post->user_id = Auth::id();
        $post->save();
        return redirect('/teams/' . $post->team_id . '/posts/' . $post->id);
    }
    
    public function edit(Team $team, Post $post)
    {
        $teams = new Team;
        $team_lists = $teams->getTeamLists();
        return view('Team.edit')->with(['team' => $team, 'post' => $post, 'team_lists' => $team_lists]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/teams/' . $post->team_id . '/posts/' . $post->id);
    }
    
    public function destroy(Post $post, Team $team)
    {
        $team = $post->team->id;
        $post->delete();
        return redirect('/teams/' . $team);
    }
}
