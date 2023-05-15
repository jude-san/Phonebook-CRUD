<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Phonebook - CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Number</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('views.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route( 'views.update' , $phonebook->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Firt Name:</strong>
                        <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{ $phonebook -> firstname }}">

                        <!-- Error -->
                        <span style=" color:red">
                            @error('firstname')
                            {{ $message }}
                            @enderror
                        </span>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last Name:</strong>
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{$phonebook -> lastname}}">

                        <!-- error -->

                        <span style="color:red">
                            @error('lastname')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phone Number:</strong>
                        <input type="tel" name="number" class="form-control" placeholder="Phone Number" value="{{$phonebook -> number }}">

                        <!-- error -->
                        <span style=" color:red">
                            @error('number')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>