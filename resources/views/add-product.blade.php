<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add Product</title>
</head>
<body>
    @include('partials.navbar')
    <div class="card fat">
        <div class="card-body">
            @if (Session::has('success'))
                      <div class="alert alert-dismissable alert-success">    
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                              {{ Session::get('success') }}
                      </div>
                    @endif
            <h4 class="card-title">Add Product</h4>
        <form method="POST" action="/dashboard/add-product" class="my-login-validation">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                <input style="width: 20%;" id="title" type="text" class="form-control @error('title') is-invalid @enderror"  name="title" value="{{ old('title') }}" required autofocus >
                    @error('title')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>	
                    @enderror
                    
                </div>
                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input style="width: 20%;" id="price" value="{{ old('price') }}" type="text" class="form-control @error('price') is-invalid @enderror" name="price" required data-eye>
                    @error('price')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>	
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="ck-editor" value="{{ old('description') }}" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5" required data-eye></textarea>
                    <script>
                        CKEDITOR.replace( 'ck-editor' );
                    </script>
                    @error('description')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>	
                    @enderror
                </div>

                <div class="form-group m-0">
                    <button style="width:7%" type="submit" class="btn btn-primary btn-block">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>