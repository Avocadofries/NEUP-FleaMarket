@extends('main')

@section('content')
    <h1>Articles</h1>
    <hr/>

    @foreach($articles as $article)
        <article>
            <h2>
                {{--方法一--}}
                {{--<a href="/articles/{{$article->id}}">{{ $article->title }}</a>--}}
                {{--方法二--}}
                {{--<a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a>--}}
                {{--方法三--}}
                <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>
            </h2>
            <div class="body">{{ $article->body }}</div>
        </article>
    @endforeach
@stop