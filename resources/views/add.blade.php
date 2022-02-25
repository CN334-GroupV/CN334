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

            .addbutton{
                margin-left:150px;
                margin-top:20px;
                font-size:30px;
                color:rgb(255,193,7);
                border: 2px solid rgb(255,193,7);
                border-radius:15px;
                padding-left:100px;
                padding-right:100px;
                
            }

            .addbutton:hover{
                color: rgb(255,255,255);
                background: rgb(255,193,7);
                box-shadow: 0 0 20px rgb(255,193,7), 0 0 40px rgb(255,193,7), 0 0 60px rgb(255,193,7);
                transition-delay: 0.1s;
            }

            .addtask{
                background-color:rgb(255,255,255);
                height:30%;
           
            }

            .addinput{
                width:80%;
                margin-left:10%;
                padding-top:50px;
            }

            .container{
                background-color:rgb(15,32,37);
                width:800px;
                height: 250px;
                border-radius:20px;
                border: 2px solid rgb(255,193,7);
                box-shadow: 0 0 20px rgb(255,193,7), 0 0 40px rgb(255,193,7), 0 0 60px rgb(255,193,7);
            }

        </style>

</head>
<body class="antialiased">
    <video autoplay muted loop id="myVideo">
        <source src="/images/bdvdo.mp4" type="video/mp4">
        </video>
    <div class="Bg">
        <div class="container">

                <form method="POST" action="/task" class='addinput'>
                    
                    <div class="form-group">
                        <textarea name="description" class="addtask"  placeholder='Enter your task'></textarea>  
                        @if ($errors->has('description'))
                        <span class="text-danger font-style: italic font-medium ">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    
                    

                    <div class="form-group">
                        <button type="submit" class="addbutton btn btn-outline-warning">Add Task</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            
        </div>
    </div>

        </body>
</x-app-layout>