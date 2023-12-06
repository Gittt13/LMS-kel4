<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  
</body>

</html> -->

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>
    <div class="container">
    <div calss="row">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <div calss="col-md-8 col-md-offset-2">
        <div calss="panel panel-default">
          <div calss="panel-heading" style="background: #2e6da4; color: white">
            Add Event To Calendar
          </div>
          <div class="panel-body">
            <h1> Task : Tambah Data Event </h1>
            <form method="POST" action="{{ route('addevent.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <label for=""> Enter Name Of The Event </label>
              <input class="form-control" type="text" name="title" placeholder="Enter The Name" /><br /><br />
              <label for=""> Enter Color </label>
              <input class="form-control" type="color" name="color" placeholder="Enter The Color" /><br /><br />

              <label for=""> Enter Start Date Of Event </label>
              <input class="form-control" type="date" name="start_date" class="date"
                placeholder="Enter Start Date" /><br /><br />
              <label for=""> Enter End Date Of Event </label>
              <input class="form-control" type="date" name="end_date" class="date"
                placeholder="Enter End Date" /><br /><br />

              <a href="eventpage" class="btn btn-primary"> Back </a>
              <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
