@extends('students.layout')
@section('content')

<div class="m-5">
    <form action="{{route('students.update',$student->id)}}" method="post">
        @csrf
        @method("put")
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" value="{{$student->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" name="email" value="{{$student->email}}" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="shi" class="form-label">Password</label>
            <input type="password" name="password" value="{{$student->password}}" class="form-control" id="shi">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
           <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection