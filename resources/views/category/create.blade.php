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
<form  action="{{route('category.store')}}" method="POST" style="margin:30px">
    @csrf
    <label for="title">insert your category</label> 
    <input type="text" name="title" id="title" required>

    

    



    </br></br></br>

<input type="submit" value="create category">

</form>
</fieldset>
</div> 
@endsection
