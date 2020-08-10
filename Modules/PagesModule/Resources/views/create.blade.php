@extends('pagesmodule::layouts.master')

@section('content')
  <h2>Create:</h2>

   <form action="{path}" method="post"enctype="multipart/form-data">

        {{csrf_field()}}
        {!! method_field('patch') !!}

   

        
        <div class="form-group">
            <label for="name">input Name:</label>
            <input class="form-control" type="text" name="name"  id="name">
        </div>

        <div class="form-group">
            <label for="path">input Path:</label>
            <input class="form-control" type="text" name="path"  id="path">
        </div>

       

        <div class="form-group">
            <label for="content">input Content:</label>
            <textarea class="form-control" type="text" name="content" id="content"></textarea>
        </div>
        

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>

       @include('layouts.error')

    </form>
@endsection
