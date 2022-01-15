<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>



            .body-css{
                background: url('{{url("/images/bg.jpg")}}') no-repeat;
                
                background-repeat: no-repeat;
                background-size: 100%;
            }

            .task-detail{
                background-color:rgb(15,32,37);
            }

            .tasklist{
                margin-left:25%;
                width:50%;
                height: 800px;
            }

            .action-label{
                color: white;
                margin-left:500px;
            }

            .editdeletebut{
                display:flex;
                margin-left: 580px;
            }
        </style>
    </head>

    
    <x-app-layout>
        <div >
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
            <div class="py-10" style="color:white;">
                <div class="tasklist" style="white-space: nowrap; display: table;">
                    <div class="task-detail overflow-hidden shadow-xl sm:rounded-lg p-5">
                        <div class="flex">
                            <div class="flex-auto text-2xl mb-4">Tasks List</div>
                            
                            <div class="flex-auto text-right mt-2">
                                <a href="/task" ><i class="fa fa-plus" style="font-size:36px;color:white;"></i> </a>
                            </div>
                        </div>
                        <table style="display: block; height: 50vh; overflow-y: scroll;">
                            <thead>
                            <tr class="border-b">
                                <a class="text-left p-3 px-5" style="font-size:36px">Task</a>
                                <a class="action-label" style="font-size:36px">Actions</a>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach(auth()->user()->tasks as $task)
                                <tr class="border-b hover:bg-orange-100 ">
                                    <td class="p-3 px-5">
                                        {{$task->description}}
                                    </td>
                                    <td class="editdeletebut">
                                        <a href="/task/{{$task->id}}" name="edit" ><i class="fa fa-edit" style="font-size:24px; margin-right:10px; margin-top:2px; color:white;"></i>  </a>
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
        </div>
    </x-app-layout>
    </body>
</html>
