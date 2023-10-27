@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if(session('login-success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('login-success') }}
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are Student.
                    @if (!$student['group_id'])
                        <div class="alert alert-success" role="alert">
                        <a href="{{route('student.groupForm', $student->student_id)}}"  class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">Please choose your group</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection