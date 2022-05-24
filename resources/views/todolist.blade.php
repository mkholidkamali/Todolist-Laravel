<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <title>Praktik | Todolist</title>
    </head>
    <body>

        <h1 class="text-center" style="margin-top: 20vh">TODOLIST</h1>
        <div class="container">
            <div class="col-md-3 mx-auto row">
                <a class="btn btn-success mx-auto col-md-5" href="/todolist/create">Tambah</a>
            </div>
            <div class="card col-md-6 mx-auto border-0">
                <div class="card-body">
                    <table>
                        @foreach ($todolist as $todo)
                        <tr>
                            <td>
                                <a class="badge bg-warning mx-auto col-md-5 border-0" href="/todolist/{{ $todo->id }}/edit"><i class="bi bi-pencil"></i> </a>
                                <form action="/todolist/{{ $todo->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger mx-auto col-md-5 border-0" href="/todolist/{{ $todo->id }}"><i class="bi bi-trash"></i> </button>
                                </form>
                            </td>
                            <td>
                                {{ $loop->iteration }}. {{ $todo->todolist }}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>