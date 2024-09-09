<!DOCTYPE html>
<html>
<head>
    <title>Tags</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                <a class="nav-link" href="/home">Home </a>
            </li><Li>

                <a class="nav-link" href="/tags" >Tags <span class="sr-only">(current)</span></a>
            </Li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"    onclick="return confirm('{{ 'Are you sure you want to delete ?' }}');">
                    @csrf
                </form>
                <a class="nav-link" href="/logout" onclick="return confirm('{{ 'Are you sure you want to Logout ?' }}');">Logout</a>
            </li>
            
        </ul>
    </div>
</nav>

<br>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="container mt-5">
        <center> <h1 class="mb-4">Create Tags</h1></center>

        <form action="{{ route('tags') }}" method="POST" id="createTagForm">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" id="tag" name="tag" required>
    </div>
</form>
    </div>
    
<div class="container mt-5">
   <center><h1 class="mb-4">Tags</h1></center>
   <hr>

    <form action="{{ url('/delete-multiple') }}" method="POST" id="deleteMultipleForm">
        @csrf
        @method('DELETE')

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Select All <br><input type="checkbox" id="select_all"></th>
                    <th>Tags</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td><input type="checkbox" name="select[]" value="{{ $item->id }}"></td>
                        <td>{{ $item->tags }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                        <form action="{{ route('delete', $item->id) }}" method="POST" style="display:inline;" 
                                 onclick="return confirm( 'Are you sure you want to delete ?' );">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
                        </td>
                        <td>
                            <form action="{{ route('edit', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('get')
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-danger mt-3">Delete Selected</button>
    </form>
</div>
<script>
    $('#select_all').change(function() {
  var checkboxes = $(this).closest('form').find(':checkbox');
  checkboxes.prop('checked', $(this).is(':checked'));
});
</script>


   