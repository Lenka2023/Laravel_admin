@extends('pagesmodule::layouts.master')

@section('content')
   <h2>Edit a post:</h2>

    <form action="/posts/{{$post->id}}" method="post"enctype="multipart/form-data">

        {{csrf_field()}}
        {!! method_field('patch') !!}
         <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{{$post->title}}}">
        </div>

        <div class="form-group">
            <label for="alias">Slug:</label>
            <input class="form-control" type="text" name="alias" id="slug" value="{{$post->slug}}">
        </div>

        <div class="form-group">
            <label for="intro">URL:</label>
            <textarea class="form-control" type="text" name="url" id="url" >{{$post->iurl}}</textarea>
        </div>

        <div class="form-group">
            <label for="body">Text:</label>
            <textarea class="form-control" type="text" name="text" id="text">{{$post->text}}</textarea>
        </div>
        
        <div class="form-group">
            <label for="file">Image:</label>
            <input class="btn btn-primary"  type="file" name="image" > <br/>
        </div>
        

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
