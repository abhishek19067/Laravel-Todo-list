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

        .table {
            margin-top: 30px;
            border-collapse: separate;
            border-spacing: 0 10px;
        }
        .table-bordered thead th {
            background-color: #f7f7f7;
            text-align: center;
        }
        .table tbody tr {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .table tbody tr:hover {
            background-color: #f2f2f2;
        }
        .table-bordered tbody td {
            vertical-align: middle;
            text-align: center;
        }
        .btn-warning {
            background: linear-gradient(to right, #ffcc00, #ff9900);
            border: none;
            color: #fff;
            transition: background 0.3s ease;
        }
        .btn-danger {
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            border: none;
            color: #fff;
            transition: background 0.3s ease;
        }
        .btn-warning:hover, .btn-danger:hover {
            opacity: 0.8;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            margin-top: 30px;
            border-top: 1px solid #ddd;
            color: #333;
            text-align: center;
        }
        .footer p {
            margin: 0;
        }
        .footer i {
            margin-right: 15px;
            color: #6a11cb;
            transition: color 0.3s ease;
        }
        .footer i:hover {
            color: #333;
        }
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

       

        #timer {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            color: #000;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align:center;
        }

        .animated-timer {
            animation: pulse 1.5s infinite;
        }

        .navbar-timer {
            font-size: 1.5rem;
            color: #fff;
            padding: 10px;
            background-color: #6a11cb;
            border-radius: 5px;
        }

        .navbar-timer-container {
            display: none;
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 999;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            }
            50% {
                transform: scale(1.1);
                box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            }
        }
        .checkbox-container {
  
}

.form-check {
  display: flex;
  align-items: center;
  margin: 10px;
}

.form-check label {
  margin: 0;
}

.form-check input[type="checkbox"] {
  margin: 0;
  padding: 0;
  border: 1px solid #ddd;
  border-radius: 2px;
  padding: 2px;
}

.form-check input[type="checkbox"]:checked {
  background-color: #333;
  color: #fff;
}

.btn-clear {
  margin: 10px;
  padding: 5px 10px;
  border: 1px solid #ddd;
  border-radius: 2px;
  cursor: pointer;
}

.btn-clear:hover {
  background-color: #333;
  color: #fff;
}

        .hide-on-scroll {
            display: none;
        }
    </style>
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
            </li><Li>

                <a class="nav-link" href="/tags" >Tags</a>
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

<center><h1>Store New Data</h1></center>

<form id="storeForm" action="{{ url('/store') }}" method="POST"  >
    @csrf
    <input
        type="text"
        class="form-control"
        name="text"
        id="text"
        placeholder="Type Here"
        required
    >
    <input type="hidden" name="timer_value" id="timer_value">
    <div id="timer" class="mb-4"></div>
</form>


<div class="container mt-5">
   <center><h1 class="mb-4">Store Data</h1></center>
   <hr>

    <form action="{{ url('/delete-multiple') }}" method="POST" id="deleteMultipleForm">
        @csrf
        @method('DELETE')

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Select All <br><input type="checkbox" id="select_all"></th>
                    <th>Text</th>
                    <th>Timer</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Tags</th>
                    <th>Actions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $items)
                
                    <tr>
                        <td><input type="checkbox" name="select[]" value="{{ $items->id }}"></td>
                        <td>{{ $items->text }}</td>
                        <td>{{ $items->timer }}</td>
                        <td>{{ $items->created_at }}</td>
                        <td>{{ $items->updated_at }}</td>
                      
                        </td>
                        <td>
                        <form action="{{ route('deletes', $items->id) }}" method="POST" style="display:inline;" 
                                 onclick="return confirm( 'Are you sure you want to delete ?' );">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
                        </td>
                        
                        <td>
    <div class="dropdown">

        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="showTagsButton-{{$items->id}}">
          Tags
        </button>
    
       <div class="dropdown-menu checkbox-container">
            @foreach ($datas as $tag)
            <div class="form-check">
                <form method="post">
                    @csrf
                <input type="checkbox" class="tag-checkbox" name="tags[{{$items->id}}][]" id="{{$tag->tags}}" value="{{$tag->tags}}"
                    {{ in_array($tag->tags, $items->tags ?? []) ? 'checked' : '' }}>
                <label for="{{$tag->tags}}">{{$tag->tags}}</label>

                @endforeach
                <br><input type="submit" value="Show">
                </form>
            </div>
            </div>
    </div>
</td>
                        <td>
                            <form action="{{ route('edits', $items->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('get')
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                            @endforeach
    </td>
   


                    </tr>
            </tbody>
        </table>
        <div class="dropdown">
  
        <button type="submit" class="btn btn-danger mt-3">Delete Selected</button>
    </form>
</div>
<script>
    let timerInterval;
let isTimerRunning = false;
let startTime; 

document.getElementById('text').addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); 

        if (!isTimerRunning) {
            startTimer(); 
        } else {
            stopTimer(); 
            document.getElementById('storeForm').submit(); 
        }
    }
});
$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('.navbar-timer-container').fadeIn();
    } else {
        $('.navbar-timer-container').fadeOut();
    }
});

function startTimer() {
    startTime = Date.now(); 
    isTimerRunning = true;

    timerInterval = setInterval(() => {
        let elapsedTime = Date.now() - startTime;
        document.getElementById('timer').innerText = `Timer: ${formatTime(elapsedTime)}`;
    }, 1000);
}

function stopTimer() {
    clearInterval(timerInterval); 
    isTimerRunning = false;

    let elapsedTime = Date.now() - startTime;
    document.getElementById('timer_value').value = formatTime(elapsedTime);

    if (confirm("Are you sure you want to stop the timer?")) {
        alert("Timer stopped.");
    } else {
        isTimerRunning = true;
        timerInterval = setInterval(updateTimer, 1000);
        console.log("Timer continued.");
    }
}

function formatTime(milliseconds) {
    let totalSeconds = Math.floor(milliseconds / 1000);
    let minutes = Math.floor(totalSeconds / 60);
    let seconds = totalSeconds % 60;
    minutes = minutes < 10 ? `0${minutes}` : minutes;
    seconds = seconds < 10 ? `0${seconds}` : seconds;

    return `${minutes}:${seconds}`;
}
$('#select_all').change(function() {
  var checkboxes = $(this).closest('form').find(':checkbox');
  checkboxes.prop('checked', $(this).is(':checked'));
});

    
$('.btn-clear').on('click', function() {
    $(this).closest('.checkbox-container').find(':checkbox').prop('checked', false);
});

document.addEventListener('DOMContentLoaded', function () {
    
    const showTagsButton = document.getElementById('showTagsButton');
    const selectedTagsContainer = document.getElementById('selectedTagsContainer');
    const checkboxes = document.querySelectorAll('.tag-checkbox');

    function updateDisplayedTags() {
        const selectedTags = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);

        
        selectedTagsContainer.innerHTML = '';

        if (selectedTags.length > 0) {
            selectedTags.forEach(tag => {
                const tagSpan = document.createElement('span');
                tagSpan.className = 'badge badge-info';
                tagSpan.textContent = tag;
                selectedTagsContainer.appendChild(tagSpan);
            });
        } else {
            selectedTagsContainer.textContent = 'No Tags';
        }
    }

    showTagsButton.addEventListener('click', updateDisplayedTags);

    const clearButton = document.querySelector('.btn-clear');
    clearButton.addEventListener('click', function () {
        checkboxes.forEach(checkbox => checkbox.checked = false);
        updateDisplayedTags();
    });
});

$(document).ready(function() {
    function updateSelectedTags() {
        let selectedTags = [];
        $('.tag-checkbox:checked').each(function() {
            selectedTags.push($(this).val());
        });

        if (selectedTags.length > 0) {
            $('#showTagsButton').text(` ${selectedTags.join(', ')}`);
        } else {
            $('#showTagsButton').text('Tags');
        }
    }

    $('.tag-checkbox').on('change', function() {
        updateSelectedTags();
    });
    $('.btn-clear').on('click', function() {
        $(this).closest('.checkbox-container').find('.tag-checkbox').prop('checked', false);
        updateSelectedTags();
    });
    updateSelectedTags();
});
$(document).ready(function() {
    function updateSelectedTags(button) {
        let selectedTags = [];
        $(button).closest('.dropdown').find('.tag-checkbox:checked').each(function() {
            selectedTags.push($(this).val());
        });

        if (selectedTags.length > 0) {
            $(button).text(` ${selectedTags.join(', ')}`);
        } else {
            $(button).text('Tags');
        }

        const selectedTagsContainer = $(button).closest('.dropdown').find('.selected-tags');
        selectedTagsContainer.empty();

        if (selectedTags.length > 0) {
            selectedTags.forEach(tag => {
                const tagSpan = document.createElement('span');
                tagSpan.className = 'badge badge-info';
                tagSpan.textContent = tag;
                selectedTagsContainer.append(tagSpan);
            });
        } else {
            selectedTagsContainer.text('');
        }
    }

    $('.tag-checkbox').on('change', function() {
        updateSelectedTags($(this).closest('.dropdown').find('.dropdown-toggle'));
    });
    $('.btn-clear').on('click', function() {
        $(this).closest('.dropdown-menu').find('.tag-checkbox').prop('checked', false);
        updateSelectedTags($(this).closest('.dropdown').find('.dropdown-toggle'));
    });
    $('.dropdown-toggle').each(function() {
        updateSelectedTags($(this));
    });
});
    </script>

    </body>
<div class="footer">
    <p>&copy; 2024 Store Data. All Rights Reserved.</p>
    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
</div>
<html>

