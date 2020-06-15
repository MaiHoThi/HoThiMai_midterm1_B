<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <title>Create</title>
</head>

<body>
    <div class="container">

        <form action="/products" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <legend>Add products</legend>

            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" name="name" placeholder="Input ">
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="form-group">
                <label for="image">image:</label>
                <input type="file"  name="image">
            </div>
            <div class="form-group">
                <label for="typetour">typetour:</label>
                <input type="text" class="form-control" name="typetour" placeholder="Input ">
            </div>
            <div class="form-group">
                <label for="schedule">schedule:</label>
                <input type="text" class="form-control" name="schedule" placeholder="Input ">
            </div>
            <div class="form-group">
                <label for="depart">schedule:</label>
                <input type="date" class="form-control" name="depart">
            </div>
            <div class="form-group">
                <label for="number">number people:</label>
                <input type="number" class="form-control" name="number" placeholder="Input ">
            </div>
            <div class="form-group">
                <label for="price">price:</label>
                <input type="text" class="form-control" name="price" placeholder="Input ">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @csrf
        @foreach ($tours as $item)
            
     
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>image</th>
                    <th>typetour</th>
                    <th>schedule</th>
                    <th>depart</th>
                    <th>number people</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
             
                <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td><img src="{{'/storage/'.$item->image}}" alt="anh" style="width: 50px"></td>
                    <td>{{$item->typetour}}</td>
                    <td>{{$item->schedule}}</td>
                    <td>{{$item->depart}}</td>
                    <td>{{$item->number}}</td>
                    <td>{{$item->getPrice()}}</td>

                
            </tbody>
        </table>
        @endforeach
    </div>
</body>

</html>