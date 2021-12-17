<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}
    </style>
</head>
<body>
    @include('partials.navbar')
    <div class="container">
      @if (Session::has('success'))
                      <div class="alert alert-dismissable alert-success">    
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                              {{ Session::get('success') }}
                      </div>
    @endif
        <div class="row">
          <div class="col-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Sr.</th>
                  <th scope="col">Title</th>
                  <th scope="col">Price</th>
                  <th scope="col">Description</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
@if ($count == 0)
<tr>
  <td colspan="5"><center>No Products Added!</center></td>
</tr>
@else
  @foreach ($products as $product)
<tr>
  <th scope="row">{{$loop->iteration}}</th>
  <td>{{$product->title}}</td>
  <td>{{$product->price}}</td>
  <td>{!!$product->description!!}</td>
  <td>
    <a href="/dashboard/edit-product/{{$product->id}}"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
    <a href="/dashboard/delete-product/{{$product->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
  </td>
</tr>
  @endforeach
@endif
            </tbody>
            </table>
          </div>
        </div>
      </div>
</body>
</html>