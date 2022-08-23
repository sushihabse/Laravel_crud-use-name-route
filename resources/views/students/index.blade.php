@extends('students.layout')
@section('content')

<div class="m-5">
    <a href="{{route('welcome')}}" class="btn btn-info" >Home</a>
    <a href="{{route('student.create')}}" class="btn btn-primary">+Add Student</a>
</div>

<div class="row m-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->password}}</td>
                <td class="d-flex">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-success m-1">Edit</a>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-success m-1">Show</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="post" onsubmit="return confirm('Are you sure?');">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                    </form>
                </td>
                </tr>
            <tr>
                @endforeach
        </tbody>
    </table>
</div>

@endsection