@extends('layouts.main')
@section('content')
    <button onclick="window.location.href='/sites/create'" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create New Site</button>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Site Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Site Domain
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$row->title}}
                    </th>
                    <td class="px-6 py-4">
                        {{$row->domain}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/sites/{{$row->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a><br>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
