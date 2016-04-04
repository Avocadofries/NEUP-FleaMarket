@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑</div>

                    <div class="panel-body">


                        <form action="{{ URL('users/pages/'.$page->id) }}" method="POST">
                            <input name="_method" type="hidden" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <p>学生卡号</p><br>
                            <input type="text" name="cardid" class="form-control" required="required" value="{{ $page->cardid }}">
                            <br>
                            <p>昵称</p><br>
                            <input type="text" name="username" class="form-control" required="required" value="{{ $page->username }}">
                            <br>
                            <p>真实姓名</p><br>
                            <input type="text" name="realname" class="form-control" required="required" value="{{ $page->realname }}">
                            <br>

                            <button class="btn btn-lg btn-info">编辑</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection