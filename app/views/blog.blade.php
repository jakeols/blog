@extends('layout')
@section('posts')
<table>
    @foreach($posts as $post)
    <tr>
        <td><h2 class="text">{{ link_to_action('PostsController@show', $post->title, $post->id)}}</h2></td>
    </tr>
    <tr>
        <td> {{ $post->body; }} </td>
    </tr>
    @endforeach
</table>
@stop