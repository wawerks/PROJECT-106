<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
       body {
            background-image: url("{{ asset('css/1.jpg') }}"); /* Specify the path to your image */
            background-size: cover; /* Cover the entire background */
            background-position: center top; /* Center the background image */
       }
       .container{
        text-align : center;
        margin-top : 80px;
        background-color : white;
        height : 87vh;
       }
       .container-fluid{
        padding-top: 50px;
       }
      .container-fluid p{
        margin-top:50px;
       }
       
       </style>
</head>

<body>

       <div class="container">
        <div class="container-fluid">
        <h1>Final Project in Course IT-106 <br> INTEGRATIVE PROGRAMMING TECHNOLOGIES I - 2ND SEM SY23-24</h1>
        <h6 class="mt-4"><b>Project Overview: Shared Database Integration with Java RMI and Laravel</b></h6>
        <p style ="text-align: justify">
        <b>Objective:</b>
        Implement a shared database integration method using two applications that communicate and share 
        resources through a single database. The project involves using Java RMI for data handling and XML parsing, 
        and Laravel for web-based data display.</p>

       <div class="row">

        <div class="col">
        <div style = "text-align:justify">
        <h2 style="margin-left : 50px; margin-top: 50px">Key Features:</h2>
            <ul class="mt-4">
                <li class="mb-2">XML parsing for student and course data.</li>
                <li class="mb-2">Data migration from Java client to server and storage in a database.</li>
                <li class="mb-2">Use of hierarchical inheritance in application processes.</li>
                <li class="mb-2">Web interface for displaying student information using Laravel.</li>
            </ul>
            </div>
        </div>

        <div class="col">
            <h3 style="margin-top: 50px">System Architecture </h3>
        <img src="{{ asset('css/2.png') }}" alt="" class="img-fluid mt-2" style="max-width: 500px;">
        </div>
       </div>

            <div class="button mt-4">
                <div class="row">
                    <div class="col-12">
                 <a href="{{ route('student.student') }}"> <button type="button" class="btn btn-primary w-50">Proceed</button>  </a>       
                    </div>
                </div>
            </div>


        </div>
       </div>

<script src="/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>