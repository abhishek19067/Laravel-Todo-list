
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
            .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #ddd;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }
        .navbar-nav .nav-link {
            color: #333;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #6a11cb;
        }
        form label{
            font-family:"times new roman";
            font-size: 28px;
            margin-left:200px;
        }
        form input[type=password]{
            width: 60%;
            height: 40px;
            border-radius:50px;
            margin-left:190px;
            
        }
        button{
            width: 30%;
            height: 40px;
            
            
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">To-Do List</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tags">Tags</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User Options
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/change-username">Change Username</a>
                    <a class="dropdown-item" href="/change-password">Change Password</a>
                </div>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" onclick="return confirm('{{ 'Are you sure you want to logout?' }}');">
                    @csrf
                </form>
                <a class="nav-link" href="/logout" onclick="return confirm('{{ 'Are you sure you want to logout?' }}');">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<br>
<div class="container">
   <center> <h2>Change Password</h2></center>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @error('current_password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    @error('new_password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <form method="POST" action="{{ route('change.password') }}">
        @csrf
      
            <label for="current_password">Current Password</label>
            <input type="password" id="current_password" name="current_password" class="form-control" required style="margin">
       
            <br><label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" class="form-control" required>
    
            <br><label for="new_password_confirmation">Confirm New Password</label>
            <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control" required><br>
       <center> <button type="submit" class="btn btn-primary">Change Password</button></center>
    </form>
</div>

