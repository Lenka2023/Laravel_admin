@extends('pagesmodule::layouts.master')

@section('content')
   <p>
   {!!$post->title!!}
   </p>
    <p>
   {!!$post->slug!!}
   </p>
    <p>
   {!!$post->url!!}
   </p>
    <p>
   {!!$post->text!!}
   </p>
    <p>
   {!!$post->body!!}
   </p>
@endsection
