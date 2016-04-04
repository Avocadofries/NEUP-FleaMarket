@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">用户列表</div>

                    <div class="panel-body">

                      <a href="{{ URL('users/pages/create') }}" class="btn btn-lg btn-primary">新增</a>

                        @foreach ($pages as $page)
                            <hr>
                            <div class="page">
                                <h4>{{ $page->cardid }}</h4>
                                <div class="content">
                                    <p>
                                        {{ $page->username }}
                                    </p>
                                    <p>
                                        {{ $page->realname }}
                                    </p>

                                </div>
                            </div>
                            <a href="{{ URL('users/pages/'.$page->id .'/edit') }}" class="btn btn-success">编辑</a>

                            <form action="{{ URL('users/pages/'.$page->id) }}" method="POST" style="display: inline;">
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger">删除</button>
                            </form>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection