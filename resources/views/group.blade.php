@extends('layouts.app')
@section('content')
<div class="relative overflow-x-auto">
  <h1  class="w-full text-sm uppercase">Group name is - {{$group->name}}</h1>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Student name
                </th>
                @foreach( $group->retebook as $ratebook)
                <th scope="col" class="px-6 py-3">
              Class {{$ratebook->lesson_no ? $ratebook->lesson_no : "" }}
                </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            @foreach( $students as $student)
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{$student->user->name}}
            </td>
            @endforeach
            @foreach( $group->retebook as $ratebook)
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 {{$ratebook->mark ? $ratebook->mark : "-" }}
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>



@endsection