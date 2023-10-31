<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@extends('layouts.app')
@section('content')
<div class="relative overflow-x-auto">
    <h1 class="w-full text-sm uppercase">Group name is - {{$group->name}}</h1> <table class="w-full text-sm text-left
        text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"> <tr> <th
            scope="col" class="px-6 py-3">
            Student name
            </th>
            @for( $i=1; $i<=12; $i++)
            <th scope="col" class="px-6 py-3">
            Class {{$i}}
            </th>
            @endfor
            </tr>
        </thead>
        <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            @foreach( $students as $student)
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$student->user->name}}
            </td>
            @foreach( $group->retebook as $ratebook)
            @if($student->student_id== $ratebook->student_id)
           <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            @if($ratebook->mark)
            <span> {{$ratebook->mark}} </span>
            @else
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" data-id="{{$ratebook->id}}" class="modalBtn">
                -
            </button>
            @endif
        </td>
        @endif
        @endforeach
        </tr>
        @endforeach
        </tbody>
        </table>
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="authentication-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-6 py-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Rate the student
                                    </h3>
                                    <form method='POST' class="space-y-6" action="{{ route('ratebook.store') }}" id="myForm">
                                        @csrf
                                        <input type="hidden" name="id" id="inp_hidden" value="">
                                        <div>
                                            <label for="mark"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mark</label>
                                            <input type="number" name="mark" id="mark"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="enter your mark" required>
                                        </div>
                                        <div>
                                            <label for="comment"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                            <input type="text" name="comment" id="comment" placeholder="description"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        </div>
                                        <button id="submit" type="submit"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
@endsection

<script type="text/javascript"> 
$(document).ready(function(){
    console.log($(".modalBtn"))
    $('.modalBtn').on('click', function() {
        let rate = $(this).data("id")
        $("#inp_hidden").val(rate); 
    }); 
    }); 
</script> 