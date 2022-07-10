<title>create</title>
@extends('layouts.layout')
@section('content')
<div>
  
</br></br>
<fieldset style="background-color: #eeeeee">

<h1> CREATE NEW TASK</h1>


@if ($errors->any())
    <div class="alert alert-danger" style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form  action="{{route('todo.taskStore')}}" method="POST" style="margin:30px">
    @csrf
    <label for="title">insert your Task title</label> 
    <input type="text" name="title" id="title" required>

    </br></br></br>
    
    <label for="description"> Task description</label> 
    <input type="text" name="description" id="description" required>

    </br></br></br>
    <label for="status"> your status</label> 
    <input type="text" name="status" id="status" required>

    </br></br></br>
    <label for="createTime"> your createTime</label> 
    <input type="text" name="createTime" id="createTime" required>

    </br></br></br>
    <label for="statusTime"> your statusTime</label> 
    <input type="text" name="statusTime" id="statusTime" required>

    </br></br></br>
    <label for="category"> your category</label> 
    <input type="text" name="category" id="category" required>



    </br></br></br>

<input type="submit" value="create Task">

</form>
</fieldset>
</div> 
@endsection
