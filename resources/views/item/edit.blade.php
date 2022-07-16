<title>edit form</title>
@extends('layouts.layout')
@section('content')
<div>
  
</br></br>
<fieldset style="background-color: #eeeeee">

<h1> EDIT YOUR TASK</h1>
<form  action="{{route('todo.taskUpdate')}}" method="POST" style="margin:30px">
    @csrf
    <label for="id">insert your Task ID</label> 
    <input type="text" name="id" id="id" required>

    </br></br></br>
    <label for="title">insert your Task title</label> 
    <input type="text" name="title" id="title" >

    </br></br></br>
    
    <label for="description"> Task description</label> 
    <input type="text" name="description" id="description" >

    </br></br></br>
    <label for="status"> your status</label> 
    <input type="text" name="status" id="status" >



    </br></br></br>

<input type="submit" value="edit Task">

</form>
</fieldset>
</div> 
@endsection
