<!DOCTYPE html>
<html>
<head>
    <title>Edit Tags</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
<style>
    
    .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #ffffff;
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
        #timer-container {
            position: relative;
            width: 250px;
            height: 250px;
            margin: 20px auto;
        }
        .form-control {
            position: relative;
            border-radius: 50px;
            border: 2px solid #ddd;
            padding: 10px 20px;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 800px;
            text-align: center;
            margin: 40px auto;
            background: #fff;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: black;
            box-shadow: 0 0 15px rgba(106, 17, 203, 0.3);
        }


        #timer-circle {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: radial-gradient(circle, #6a11cb 0%, #2575fc 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }

        #timer {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
    
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
                <a class="nav-link" href="#" onclick="confirmLogout(event);">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>

<br>

    <div class="container mt-5">
        <center> <h1 class="mb-4">Edit Tags Data</h1></center>

        <form action="{{ route('update', $store->id) }}" method="POST" id="updateForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control" id="text" name="text" value='{{ $store->tags }}' required>
            </div>
        </form>
    </div>


