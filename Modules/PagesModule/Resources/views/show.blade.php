@extends('pagesmodule::layouts.master')

@section('content')
   <p>
   {!!$title!!}
   </p>
    <p>
   {!!$slug!!}
   </p>
    <p>
   {!!$url!!}
   </p>
    <p>
   {!!$text!!}
   </p>
    <p>
   {!!$body!!}
   </p>
@endsection
