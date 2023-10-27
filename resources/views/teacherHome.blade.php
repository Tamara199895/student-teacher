@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  block mb-2">Your groups </div>
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
                               
    <label for="countries_disabled" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a group</label>
    <select name="group_id[]" id="groups" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  onchange="location = this.options[this.selectedIndex].value">
        <option  disabled selected>Choose a group</option>
        @foreach($groups as $group)
        <option value="{{route('group.show', $group->id)}}"> <a href="{{route('group.show', $group->id)}}"> {{$group->name}} </a></option>
        @endforeach 
    </select>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection