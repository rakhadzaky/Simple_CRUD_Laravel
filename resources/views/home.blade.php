<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar User</h2>
        <a href="/home/create" class="btn btn-success">Add Account</a>
        <br>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="{{route('home.destroy', $user->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <a href="{{route('home.edit', $user->id)}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <button type="submit" onclick="return confirm('Anda yakin akan menghapus data ?');" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>