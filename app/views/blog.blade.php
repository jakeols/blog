@extends('layout')
@section('posts')
<table>
    @foreach($posts as $post)
    <tr>
        <td><h2 class="text">
            
            {{ link_to_action('PostsController@show', $post->title, $post->id)}}</h2></td>
    </tr>
    <tr>
        <td>  
<?php
    if(strlen($post->body)<140){
    echo $post->body;
}
else
{
echo substr($post->body, 0, 140) . '...';
}
?>
        </td>
    </tr>
    @endforeach
</table>
@stop