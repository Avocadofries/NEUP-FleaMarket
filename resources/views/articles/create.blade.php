@extends('main')

@section('content')
 <h1>Write a new article</h1>
    <hr/>
    <form method="POST" action="http://maggot.com/articles/create" accept-charset="UTF-8">
    name:<input type="text" name="name"><br>
    <input type="submit">
    </form>

@stop