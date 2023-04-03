<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
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
    <center><h1>Edit Your laravel-Crud</h1></center>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-5 mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
Edit Your Details Here
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Field Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!--validation message-->
        @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--success validation-->
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('status') }}
                    </div>
                @endif
        
        
      <form method="post">
        @csrf
        <div class="mb-3">
            <label>Team A</label>
            <input type="text" name="teama" class="form-control" placeholder="Enter Your Detail" value="{{$editindex->teama}}">
        </div>

        <div class="mb-3">
            <label>Team B</label>
            <input type="text" name="teamb" class="form-control" placeholder="Enter Your Detail" value="{{$editindex->teamb}}">
        </div>

        <div class="mb-3">
            <label>Start Time</label>
            <input type="datetime-local" name="startdate" class="form-control" value="{{$editindex->startdate}}">
        </div>

        <div class="mb-3">
            <label>End Time</label>
            <input type="datetime-local"  name="enddate" class="form-control" value="{{$editindex->enddate}}">
        </div>

        <div class="mb-3">
            <label>Color</label>
            <input type="color" name="color" class="form-control" placeholder="Enter Your Color" value="{{$editindex->color}}">
        </div>
 
  <button type="submit" name="sumbit" class="btn btn-primary">Update</button>
  <button type="reset" name="reset" class="btn btn-danger">Reset</button>

</form>

</div>

  </div>


</div> 

</body>
</html>