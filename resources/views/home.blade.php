@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if(auth()->user()->type == 'student')
                    <p>Congratulations yor registered as a Student. See your 
                        <a href="{{route('student.home')}}">Page</a> here
                        </p>
                    @else
                        <div class="panel-heading">
                        <p>Congratulations yor registered as a Teacher. See your 
                        <a href="{{route('teacher.home')}}">page</a> here
                            
                        </div>
                    @endif
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection