@extends('students.layout')
@section('content')
<a href="{{route('student.index')}}" class="btn btn-success ms-5 mt-5 me-5">Back</a>
<div class="row m-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$students->id}}</td>
                <td>{{$students->name}}</td>
                <td>{{$students->email}}</td>
                <td>{{$students->password}}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection