<!DOCTYPE html>
<html>
<head>
    <title>Course</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("{{ asset('css/1.jpg') }}");  /* Specify the path to your background image */
            background-size: cover; /* Cover the entire background */
            background-position: center top; /* Center the background image vertically and align it to the top */
            padding-top: 100px; /* Adjust the margin-top value as needed */
        }
        h1{
          margin-right:180px
        }
        .table-custom {
            width: 90%; /* Adjust the width of the table as needed */
            margin: 0 auto; /* Center the table horizontally */
            margin-top:50px;
        }
        .table-custom th,
        .table-custom td {
            border: 10px solid #dee2e6; /* Default border color */
            text-align: center;
            padding-top:15px;            
          }
        .container{
          margin-bottom:100px;
        }
    </style>
</head>
<body>
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><b>Final Project IT - 106</b></a>
  <h1>Course</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="{{ route('student.student') }}">Students</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page"><b>Courses</b></a>
          </li>
          <div style="margin-top: 200px; text-align:center">
                 <a href="{{ route('welcome.welcome') }}"> <button type="button" class="btn btn-primary w-50">Exit</button>  </a>       
                    </div>
      </div>
    </div>
  </div>
</nav>
<div class="container">
<table class="table table-custom">
    <thead>
        <tr>
            <th>Course ID</th>
            <th>Enrolled Student</th>
            <th>Course Title</th>
            <th>Course Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->courseid }}</td>
                <td>{{ $course->studentid }}</td>
                <td>{{ $course->coursetitle }}</td>
                <td>{{ $course->coursedescription }}</td>
            </tr>
        @endforeach
    </tbody>
    </div>
</table>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
