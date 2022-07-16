<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<title>Task List</title>
@extends('layouts.layout')
@section('content')
</br></br></br></br>
<table>
  <tr>
  <th>Task ID</th>
    <th>Task Title</th>
    <th>Description</th>
    <th>status</th>
  </tr>
 
  <tr>
  <td> {{$task->id}}</td>
  <td> {{$task->title}}</td>
  <td>{{$task->description}}</td>
  <td>{{$task->status}} </td>    
    </tr>
 
 
</table>




<form  action="{{route('todo.remove')}}" method="POST" style="margin:30px">
    @csrf
    
    <input type="hidden" name="id" id="$task->id" value="{{$task->id}}" >
    

<input type="submit" value="DELETE TASK">
</form>

<form  action="{{route('todo.taskUpdate')}}" method="POST" style="margin:30px">
    @csrf
    
    <input type="hidden" name="id" id="$task->id" value="{{$task->id}}" >
     
    <input type="hidden" name="status" id="task->status" value="done">
    

<input type="submit" value="Done Task">

</form>

@endsection