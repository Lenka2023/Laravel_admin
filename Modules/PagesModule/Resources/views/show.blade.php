@extends('pagesmodule::layouts.master')

@section('content')
   <p>
   {!!$name!!}
   </p>
    <p>
   {!!$path!!}
   </p>
    <p>
   {!!$content!!}
   </p>
   
@endsection
