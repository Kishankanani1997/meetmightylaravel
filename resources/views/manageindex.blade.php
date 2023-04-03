<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--data table css file-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--pagination js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!--data table js file-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <title>Kishan Laravel</title>

  </head>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">LaravelCrud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/">Add Field</a></li>
            <li><a class="dropdown-item" href="/manageindex">Manage Field</a></li>
          </ul>
        </li>
        
    </div>
  </div>
</nav>
  <body>
    <center><h1 class="mt-5 mb-3">laravel-Crud</h1></center>


<div class="container">

                            <!--here we write code for validation of message--> 
                            @if($errors->any())
                                <div class='alert alert-danger alert-dismissible'>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!--here we pass flash data message-->
                            @if(Session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <span class="text-dark">{{ session('success')}}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <!--here we pass flash data message for updation of blogs-->
                            @if(Session('succ'))
                                <div class="alert alert-success alert-dismissible">
                                    <span class="text-dark">{{ session('succ')}}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                              <!--here we pass flash data message for updation of blogs-->
                              @if(Session('delesucc'))
                                <div class="alert alert-danger alert-dismissible">
                                    <span class="text-dark">{{ session('delesucc')}}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif


    <table class="table table-responsive mt-5" id="pagination">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">TeamA</th>
      <th scope="col">TeamB</th>
      <th scope="col">Startdate</th>
      <th scope="col">Enddate</th>
      <th scope="col">Color</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $row)
    <tr>
      <th>{{$row->id}}</th>
      <td>{{$row->teama}}</td>
      <td>{{$row->teamb}}</td>
      <td>{{$row->startdate}}</td>
      <td>{{$row->enddate}}</td>
      <td>{{$row->color}}</td>
      <td><a href='{{ URL("/editindex/".$row->id)}}' onclick="return confirm('Are you sure you want to Edit?')"><button type="submit" class="btn btn-warning" name="submit">Edit</a></button></td>
      <td><a href='{{ URL("/deleteindex/".$row->id)}}' onclick="return confirm('Are you sure you want to delete?')"><button type="submit" class="btn btn-danger" name="submit">Delete</a></button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

 
  </body>
</html>

<script>
    $(document).ready(function () {
    $('#pagination').DataTable();
    });
</script>
