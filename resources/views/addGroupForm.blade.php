@extends('layouts.app')
@section('content') 
<div>Choose the group you want to learn</div>
@error('group_id')
<div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800">{{ $message }}</div>
 @enderror
<form method="POST" action="{{ route('student.addGroup') }}">
    @csrf
    <input type="hidden" name="student_id" value="{{ $student->student_id}}">

<label for="countries_disabled" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a group</label>
    <select name="group_id" id="groups" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option  disabled selected>Choose a group</option>
        @foreach($groups as $group)
        <option value="{{$group->id}}">{{$group->name}} </option>
        @endforeach 
    </select>
    <button type="submit" class="px-5 mt-6 py-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg cursor-pointer hover:bg-blue-800 focus:ring-4">Choose</button>
</form>
@endsection