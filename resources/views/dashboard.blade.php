<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>

            .body-css{
                background: url('{{url("/images/bg.jpg")}}') no-repeat;
                background-size: 100%;
                height: 580px;
            }
        </style>
    </head>

    
    <x-app-layout>
        <div class="body-css">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
            <div class="py-10">
                <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                        <div class="flex">
                            <div class="flex-auto text-2xl mb-4">Tasks List</div>
                            
                            <div class="flex-auto text-right mt-2">
                                <a href="/task" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add new Task</a>
                            </div>
                        </div>
                        <table class="w-full text-md rounded mb-4">
                            <thead>
                            <tr class="border-b">
                                <th class="text-left p-3 px-5">Task</th>
                                <th class="text-right p-3 px-5">Actions</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(auth()->user()->tasks as $task)
                                <tr class="border-b hover:bg-orange-100">
                                    <td class="p-3 px-5">
                                        {{$task->description}}
                                    </td>
                                    <td class="flex-auto text-right p-3 px-5">
                                        
                                        <a href="/task/{{$task->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                        <form action="/task/{{$task->id}}" class="inline-block">
                                            <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                            {{ csrf_field() }}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>     
                    </div>
                </div>
            </div>
        <div/>
    </x-app-layout>
    </body>
</html>
