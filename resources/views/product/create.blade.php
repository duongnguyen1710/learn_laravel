<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    <form method="post" action="{{route('product.store')}}">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name"/>
        </div>
        <div>
            <label>Quantity</label>
            <input type="text" name="quantity"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description"/>
        </div>
        <div>
            <input type="submit" value="Save"/>
        </div>
    </form>
</body>
</html>