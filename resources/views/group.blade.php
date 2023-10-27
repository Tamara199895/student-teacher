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
                <th scope="col" class="px-6 py-3">
                    Class 1
                </th>
                <th scope="col" class="px-6 py-3">
                    Class 2
                </th>
                <th scope="col" class="px-6 py-3">
                    Class 3
                </th>
                <th scope="col" class="px-6 py-3">
                    Class 4
                </th><th scope="col" class="px-6 py-3">
                    Class 5
                </th><th scope="col" class="px-6 py-3">
                    Class 6
                </th><th scope="col" class="px-6 py-3">
                    Class 7
                </th><th scope="col" class="px-6 py-3">
                    Class 8
                </th><th scope="col" class="px-6 py-3">
                    Class 9
                </th><th scope="col" class="px-6 py-3">
                    Class 10
                </th><th scope="col" class="px-6 py-3">
                    Class 11
                </th><th scope="col" class="px-6 py-3">
                    Class 12
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach( $group->retebook as $ratebook)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                @foreach( $ratebook->student as $student)
                  {{$student->user->name}}
                  @endforeach
              </th>
              <td class="px-6 py-4">
              <a href="{{route('ratebook.edit',$ratebook)}}">{{$ratebook->class1 ? $ratebook->class1 : "-" }}</a>
              </td>
              <td class="px-6 py-4">
              {{$ratebook->class2 ? $ratebook->class2 : "-" }}
              </td>
              <td class="px-6 py-4">
              {{$ratebook->class3 ? $ratebook->class3 : "-" }}
              </td>
              <td class="px-6 py-4">
              {{$ratebook->class4 ? $ratebook->class4 : "-" }}
              </td> <td class="px-6 py-4">
              {{$ratebook->class5 ? $ratebook->class5 : "-" }}
              </td>
              <td class="px-6 py-4">
              {{$ratebook->class6 ? $ratebook->class6 : "-" }}
              </td> <td class="px-6 py-4">
              {{$ratebook->class7 ? $ratebook->class7 : "-" }}
              </td> <td class="px-6 py-4">
              {{$ratebook->class8 ? $ratebook->class8 : "-" }}
              </td> <td class="px-6 py-4">
              {{$ratebook->class9 ? $ratebook->class8 : "-" }}
              </td> <td class="px-6 py-4">
              {{$ratebook->class10 ? $ratebook->class10 : "-" }}
              </td> <td class="px-6 py-4">
              {{$ratebook->class11 ? $ratebook->class11 : "-" }}
              </td> <td class="px-6 py-4">
              {{$ratebook->class12 ? $ratebook->class12 : "-" }}
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection