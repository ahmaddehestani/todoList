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
  <th>Category ID</th>
    <th>Category Title</th>
   
  </tr>
  @foreach($categories as $Category)
  <tr>
  <td> {{$Category->id}}</td>
  <td> {{$Category->title}}</td>
    
    </tr>
  @endforeach
 
</table>
@endsection