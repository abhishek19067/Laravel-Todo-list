<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: 'Arial', sans-serif;
            color: #fff;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 15px;
            border: none;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            padding: 40px;
        }
        .card h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }
        .form-group label {
            font-weight: 600;
            color: #555;
        }
        .form-control {
            border-radius: 50px;
            border: 2px solid #ddd;
            padding: 10px 20px;
            font-size: 16px;
            box-shadow: none;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 8px rgba(106, 17, 203, 0.25);
        }
        .btn-primary {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            border: none;
            border-radius: 50px;
            font-size: 18px;
            padding: 12px 0;
            text-transform: uppercase;
            transition: background 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb);
        }
        .register-link {
            margin-top: 20px;
            text-align: center;
        }
        .register-link a {
            color: #6a11cb;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .register-link a:hover {
            color: #2575fc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Register</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password:</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                            <div class="register-link">
                            <p style="color:black">already have Account <a href="{{ route('login') }}">login</a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
