@extends('pagesmodule::layouts.master')

@section('content')
   <form name="test" method="post" action="input1.php">
  <p><b>input Title:</b><br>
   <input type="text" size="40">
   <p><b>input Slug:</b><br>
   <input type="text" size="40">
    <p><b>input IRL:</b><br>
    <input type="text" size="40">
    <p><b>input Text:</b><br>
    <textarea name="comment" cols="40" rows="3"></textarea></p>
    <p><b>input Picture:</b><br>
    <input type="file" size="40">
    </p>
    <p><input type="submit" value="Submit">
    <input type="reset" value="Очистить"></p>
    </form>
@endsection
