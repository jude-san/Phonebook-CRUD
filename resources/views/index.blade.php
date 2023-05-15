<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ponebook-crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Phonebook CRUD</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('views.create') }}"> Create phonenumber</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phonebooks as $phonebook)
                <tr>
                    <td>{{ $phonebook->id }}</td>
                    <td>{{ $phonebook->firstname }}</td>
                    <td>{{ $phonebook->lastname }}</td>
                    <td>{{ $phonebook->number }}</td>
                    <td>
                        <form action="{{ route('views.destroy',$phonebook->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route( 'views.edit' , $phonebook->id ) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $phonebooks->links() !!}
    </div>
</body>

</html>