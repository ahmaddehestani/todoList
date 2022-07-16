<title>create</title>
@extends('layouts.layout')
@section('content')
<div>
  
</br></br>
<fieldset style="background-color: #eeeeee">

<h1> SEARCH YOUR TASK BY TITLE OR ID</h1>
<form  action="{{route('todo.findOne')}}" method="POST" style="margin:30px">
    @csrf
   
    <label for="id"> your ID</label> 
    <input type="text" name="id" id="id" >



    </br></br></br>

<input type="submit" value="search task">

</form>
</fieldset>
</div> 
@endsection
