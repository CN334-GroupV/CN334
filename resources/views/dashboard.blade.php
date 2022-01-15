<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                <a href="/task" ><i class="fa fa-plus" style="font-size:36px"></i> </a>
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
                                        <a href="/task/{{$task->id}}" name="edit" ><i class="fa fa-edit" style="font-size:24px"></i>  </a>
                                        <form action="/task/{{$task->id}}" class="inline-block">
                                            <button type="submit" name="delete" formmethod="POST" ><i class="fa fa-trash" style="font-size:24px;color:red"></i></button>
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
