@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if(auth()->user()->type == 'student')
                    <p>Congratulations yor registered as a Student. See your 
                        <a href="{{route('student.home')}}" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">Page</a> here
                        </p>
                    @else
                        <div class="panel-heading">
                        <p>Congratulations yor registered as a Teacher. See your 
                        <a href="{{route('teacher.home')}}" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">page</a> here   
                        </div>
                    @endif
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection