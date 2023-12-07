<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <title>Table V04</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td,
  #customers th {
    border: 2px solid blue;
    padding: 8px;
  }

  #customers tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #customers tr:hover {
    background-color: #ddd;
  }

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  }
</style>

<body>
  {{session('msg')}}
  <div style="text-align:center">
    <a href="eventpage"> Back To Add New Records </a>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
  </div>
  <div class="container-table100">
    <table id="customers">
      <thead>
        <tr class="row100 head">
          <th class="cell100 column1" style="color:Maroon">Id</th>
          <th class="cell100 column1" style="color:Maroon">Title</th>
          <th class="cell100 column2" style="color:Maroon">Color</th>
          <th class="cell100 column3" style="color:Maroon"> Start Date</th>
          <th class="cell100 column4" style="color:Maroon">End Date</th>
          <th class="cell100 column5" style="color:Maroon">Action</th>
        </tr>
      </thead>
      @foreach($events as $event )
      <tr class="row100 head">
        <th>{{$event->id}}</th>
        <th>{{$event->title}}</th>
        <th>{{$event->color}}</th>
        <th>{{$event->start_date}}</th>
        <th>{{$event->end_date}}</th>
        <th><a href="{{action('EventController@edit',$event->id)}}" onclick="return confirm('Are you sure?')"
            style="color:Purple">Edit </a>&nbsp;
          <a href="{{action('EventController@destroy',$event->id)}}" onclick="return confirm('Are you sure?')"
            style="color:Purple">Delete </a>&nbsp;
        </th>
      </tr>
      @endforeach
    </table>
  </div>
</body>

</html> -->

<!doctype html>
<html lang="en">

<head>
  <title>Tabel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    {{session('msg')}}
    <div style="text-align:center">
      <a href="eventpage"> Back To Add New Records </a>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
    </div>
    <div class="container-fluid">
      <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Judul</th>
              <th scope="col">Color</th>
              <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($events as $event )
            <tr class="">
              <td>{{$event->id}}</td>
              <td>{{$event->title}}</td>
              <td>{{$event->color}}</td>
              <td>{{$event->start_date}}</td>
              <td>{{$event->end_date}}</td>
              <td>
                <a href="{{action('EventController@edit',$event->id)}}" onclick="return confirm('Are you sure?')"
                  style="color:Purple">Edit </a>&nbsp;
                <a href="{{action('EventController@destroy',$event->id)}}" onclick="return confirm('Are you sure?')"
                  style="color:Purple">Delete </a>&nbsp;
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>