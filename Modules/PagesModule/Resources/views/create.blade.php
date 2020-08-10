@extends('pagesmodule::layouts.master')

@section('content')
  <h2>Edit a post:</h2>

    <form action="/posts/{{$post->id}}" method="post"enctype="multipart/form-data">

        {{csrf_field()}}
        {!! method_field('patch') !!}

    <form action="/create" method="post" >

        {{csrf_field()}}
        <div class="form-group">
            <label for="title">input Title:</label>
            <input class="form-control" type="text" name="title"  id="title">
        </div>

        <div class="form-group">
            <label for="alias">input Slug:</label>
            <input class="form-control" type="text" name="slug"  id="slug">
        </div>

        <div class="form-group">
            <label for="intro">input URL:</label>
            <textarea class="form-control" type="text" name="url"  id="url"></textarea>
        </div>

        <div class="form-group">
            <label for="body">input Text:</label>
            <textarea class="form-control" type="text" name="text" id="text"></textarea>
        </div>
        <div class="form-group">
           <div class="form-group">
            <label for="file">Input Image:</label>
            <input class="btn btn-primary"  type="file" name="image" > <br/>
        </div>
         <div class="form-group">
             
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>

       @include('layouts.error')

    </form>
@endsection
