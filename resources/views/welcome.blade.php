<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('Form Validation')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-offest-4 col-lg-6">
                <div class="card shadow ">
                    <div class="card-header">
                        <h4>@lang('Form Validation')</h4>
                    </div>
                      <div class="card-body">
                          @if (count($errors) > 0)
                             @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                             @endforeach

                          @endif
                          <form action="{{ route('store') }}" method="POST">
                              @csrf
                            <div class="form-group mt-2">
                                <input type="text" name="name" class="form-control" placeholder="@lang('Your Name')">
                              </div>
                              <div class="form-group mt-2">
                                <input type="text" name="email" class="form-control" placeholder="@lang('Your Email')">
                              </div>
                              <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">@lang('Add')</button>
                              </div>
                          </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
