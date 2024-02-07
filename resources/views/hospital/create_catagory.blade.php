<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Curd</title>
  </head>
  <body>
    <div class="container">
        
        <a href="{{ url('/home') }}" class="btn btn-primary my-4">Back</a>
        <form method="post" action="{{route('catagory.store')}}">
             @csrf 
             @method('post')
            <div class="mb-3">
                <label for="" >Category Name</label>
                <input type="text" name="catagory" class="form-control" placeholder="Enter Category Name">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
              </div>
              <div class="mb-3">
                    <label for="" >Sub Category</label>
                    <input type="text" name="sub_catagory"  class="form-control" placeholder="Sub Category">
                    @error('sub_category')<span class="text-danger">{{ $message }}</span>@enderror
            <input type="submit" class="btn btn-primary my-4" value="Submit">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>