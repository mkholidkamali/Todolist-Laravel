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
            <div class="col-md-3 mx-auto row text-center">
                <form action="/todolist/{{ $todolist->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <input type="text" class="form-control" name="todolist" value="{{ $todolist->todolist }}">
                    </div>
                    <button class="btn btn-warning col-md-5" type="submit">EDIT</button>
                </form>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>