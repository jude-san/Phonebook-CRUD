<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Phonebook-CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Contact</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('views.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <!-- @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif -->
        <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->
        <form action="{{ route('views.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Firt Name:</strong>
                        <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{old('firstname')}}">

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
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{old('lastname')}}">

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
                        <input type="tel" name="number" class="form-control" placeholder="Phone Number" value="{{old('number')}}">

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
    <!-- @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror -->
</body>

</html>