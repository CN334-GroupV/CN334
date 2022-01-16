<!DOCTYPE html>
<html>
<x-app-layout>

    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Fruktur&family=Griffy&family=Indie+Flower&family=Lobster&family=Permanent+Marker&display=swap" rel="stylesheet">


    <style>
            body {
                font-family: 'Nunito';
            }
            
            }
            #video_wrapper
            {
            margin:0px;
            padding:0px;
            }
            #myVideo {
            position: none;
            right: 0;
            bottom: 0;
            min-width: 50%; 
            min-height: 50%;
            font-size:40px;
            
            }
            .Bg{
                padding: 50px;
                width: 150px;
                position: fixed ;
                bottom: 40%;
                left: 26%;
                width :45%;
            }
            img{
                border-radius: 50%;
                margin-left: 20px;
                width:50px;
                height:50px;
            }
            .h1{
                font-family: Fantasy;
                font-size: 50px;
                color: #4682B4;
            }
            .task{
                font-family: Fantasy;
                font-size: 23px; 
                color: #FFFACD; 
            }
            .line{
                display: flex; 
            }

            .addtask{
                width:100%;
            }

            .editbutton{
                margin-left:26%;
                margin-top:20px;
                font-size:30px;
                color:rgb(112,44,183);
                border: 2px solid rgb(112,44,183);
                border-radius:15px;
                padding-left:100px;
                padding-right:100px;
                
            }

            .editbutton:hover{
                color: rgb(255,255,255);
                background: rgb(112,44,183);
                box-shadow: 0 0 20px rgb(112,44,183), 0 0 40px rgb(112,44,183), 0 0 60px rgb(112,44,183);
                transition-delay: 0.1s;
            }

            .edittask{
                width:90%;
                margin-left:5%;
            }

            .editinput{
                height:100%;
                width:100%;
                padding-top:50px;
            }

            .container{
                background-color:rgb(15,32,37);
                width:800px;
                height: 250px;
                border-radius:20px;
                border: 2px solid rgb(112,44,183);
                box-shadow: 0 0 40px rgb(112,44,183), 0 0 60px rgb(112,44,183), 0 0 80px rgb(112,44,183);
            }

        </style>

</head>
<body class="antialiased">
    <video autoplay muted loop id="myVideo">
        <source src="/images/bdvdo.mp4" type="video/mp4">
        </video>    
    <div class="Bg">
        <div class="container">

            <form method="POST" action="/task/{{ $task->id }}" class='editinput'>

                <div class="edittask">
                    <textarea name="description" class="edittask">{{$task->description }}</textarea>	
                    @if ($errors->has('description'))
                        <span class="edittask">{{ $errors->first('description') }}</span>
                    @endif
                </div>


                <div class="form-group">
                    <button type="submit" name="update" class="editbutton">Update task</button>
                </div>
                {{ csrf_field() }}
            </form>
            
        </div>
    </div>

        </body>
</x-app-layout>


  

                <!-- <form method="POST" action="/task/{{ $task->id }}">

                    <div class="form-group">
                        <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->description }}</textarea>	
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>


                    <div class="form-group">
                        <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update task</button>
                    </div>
                {{ csrf_field() }}
                </form> -->

