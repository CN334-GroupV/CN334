<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>


            .dashpage{
                position: fixed;
                bottom: 0;
                color: #f1f1f1;
                width: 100%;
                padding: 20px;
                
            }

            .bgvdo{

                right: 0;
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
            }

            .task-detail{
                background-color:rgb(15,32,37);
                width:100%;
            }

            .tasklist{
                margin-left:26%;

                width:48%;
                color:rgb(220,53,69);
                border: 2px solid rgb(220,53,69);
                box-shadow: 0 0 60px rgb(220,53,69), 0 0 80px rgb(220,53,69), 0 0 100px rgb(220,53,69);
                
            }

            .list:hover{
                color:rgb(220,53,69);
                background-color:rgb(220,53,69);
                box-shadow: 0 0 60px rgb(220,53,69), 0 0 80px rgb(220,53,69), 0 0 100px rgb(220,53,69);
            }

            .tabletask{
                width:100%;
            }

            .action-label{
                color: white;
                margin-left:500px;
            }

            .task-label{
                color:white;
            }

            .action-label{
                color: white;
            }

            .editdeletebut{
                display:flex;
                margin-left: 510px;
                margin-right:20px;
            }

            ::-webkit-scrollbar {
                width: 10px;
 
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background: #f1f1f1; 
                border-radius:10px;
            }
            
                
                /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #888; 
                border-radius:10px;

            }
            

                /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #555; 

            }

            .dashbar{
                background: rgb(15,32,37);
            }
            

        </style>

    </head>

    
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
            <video autoplay muted loop id="myVideo" class='bgvdo'>
                <source src="/images/bdvdo.mp4" type="video/mp4">
            </video>
            <div class="dashpage" style="color:white;">
            
                <div class="tasklist" style="white-space: nowrap; display: table;">
                    <div class="task-detail overflow-hidden shadow-xl sm:rounded-lg p-5">
                        <div class="flex">
                            <div class="flex-auto text-2xl mb-4">Tasks List</div>
                            
                            <div class="flex-auto text-right mt-2">
                                <a href="/task" ><i class="fa fa-plus" style="font-size:36px;color:white;"></i> </a>
                            </div>
                        </div>
                        <table class='tabletask' style="display: block; width:90vh; height: 62vh; overflow-y: scroll;">
                            <thead>
                            <tr class="border-b">
                                <a class="task-label text-left p-3 px-5" style="font-size:38px">Task</a>
                                <a class="action-label" style="font-size:38px; margin-left:62%;">Actions</a>
                                <th></th>
                            </tr>
                            </thead>
                            <body class='taskbody'>
                            @foreach(auth()->user()->tasks as $task)
                                <tr class="list border-b hover:bg-orange-100 ">
                                    <td class="p-3 px-5" style="font-size:20px; color:white;">
                                        {{$task->description}}
                                    </td>
                                    <td class="editdeletebut">
                                        <a href="/task/{{$task->id}}" name="edit" ><i class="fa fa-edit" style="font-size:30px; margin-right:3px; margin-top:20px; color:white;"></i>  </a>
                                        <a href="https://twitter.com/share?url={{$task->description}}" onclick="window.open(this.href);return false;" class="twitter"><i style='font-size:29px; margin-right:5px; margin-top:20px; color:white;' class="fa fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=127.0.0.1:8000" class="facebook"><i style='margin-top:20px; margin-right:5px; font-size:28px; color:white;' class="fa fa-facebook-square"></i></a>
                                        <form action="/task/{{$task->id}}" class="inline-block">
                                            <button type="submit" name="delete" formmethod="POST" ><i class="fa fa-trash" style="font-size:30px; margin-top:17px; color:red"></i></button>
                                            {{ csrf_field() }}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </body>
                        </table>     
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    </body>
</html>
