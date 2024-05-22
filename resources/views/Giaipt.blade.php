<!doctype html>
<html lang="en">
  <head>
    <title>Giải phương trình bậc 1 </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                </ul>  
            </div>
        @endif
  <body>
    
    
    <div class="container">
       <h1>TRẦN THANH TÀI  </h1>
    <h1>Giải phương trình bậc 1 </h1>
        <form action="{{ route('postPt1')}}" method="POST">
            @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nhập hệ số a: </label>
            <input type="text" id="hsa" name="hsa" class="@error('hsa') is-invalid @enderror" value="{{isset($a)?$a:''}}" > <br>
            <label for="exampleInputEmail1">Nhập hệ số b: </label>
            <input type="text" id="hsb" name="hsb" class="@error('hsb') is-invalid @enderror" value="{{isset($b)?$b:''}}" ><br>
        </div>
            </fieldset>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Giải</button>
                </div>
            </div>
        </form>

        <h2>
            Kết quả:@if(isset($ketqua))
                        {{$ketqua}} 
                    @endif
        </h2>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>