@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規投稿</div>
                
                <div class="card-body">
                    <form action='/posts' method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="team" class="form-label">チームの選択</label>
                            
                            <div class="form-field">
                                <select name="post[team_id]" value="{{ old('post.team_id') }}">
                                    @foreach ($team_lists as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                <p class="team_error" style="color:red">{{ $errors->first('post.team_id') }}</p>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="title" class="form-label">タイトル</label>
                        
                            <div class="form-field">
                                <input type="text" size="47" name="post[title]" placeholder="タイトルを記入" value="{{ old('post.title') }}"/>
                                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="body" class="form-label">本文</label>
                        
                            <div class="form-field">
                                <textarea name="post[body]" placeholder="本文を記入">{{ old('post.body') }}</textarea>
                                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
                            </div>
                        </div>
                        
                        <div class="form-button">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    保存
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

