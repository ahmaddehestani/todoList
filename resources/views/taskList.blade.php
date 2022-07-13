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
    <th>createTime</th>
    <th>status</th>
    <th>statusTime</th>
    <th>category_id</th>
  </tr>
  @foreach($tasks as $task)
  <tr>
  <td> {{$task->id}}</td>
  <td> {{$task->title}}</td>
  <td>{{$task->description}}</td>
  <td>{{$task->createTime}}</td>
  <td>{{$task->status}} </td>
  <td>{{$task->statusTime}}</td>  
  <td>{{$task->category_id}}</td>   
    </tr>
  @endforeach
 
</table>
@endsection