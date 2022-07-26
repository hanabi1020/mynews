@extends('layouts.profile_2')
@section('title', 'Myプロフィール_2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ action('Admin\ProfileController_2@update') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名(name)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="name" rows="10">{{ old('name') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別(gender)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="gender" rows="10">{{ old('gender') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味(hobby)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="10">{{ old('hobby') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄(introduction)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <!--<div class="row mt-5">-->
                <!--    <div class="col-md-4 mx-auto">-->
                <!--        <h2>編集履歴</h2>-->
                <!--        <ul class="list-group">-->
                <!--            @if ($profile_form->history_profiles != NULL)-->
                <!--                @foreach ($profile_form->history_profiles as $history)-->
                <!--                    <li class="list-group-item">{{ $history->edited_at }}</li>-->
                <!--                @endforeach-->
                <!--            @endif-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
@endsection