<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create New Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                
            @endforeach
        </ul>
            
        @endif
    </div>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label>Product name:</label>
            <input type="text" name="pname" placeholder="Enter product name"> <br>
        </div>
        <div>
            <label>Supplier's name:</label>
            <input type="text" name="p_supplier" placeholder="Enter supplier name">
        </div>
        <div>
            <label>Product quantity:</label>
            <input type="number" name="pquantity" placeholder="Product quantity"> 
        </div>
        <div>
            <label>Product price:</label>
            <input type="number" name="p_price" placeholder="Product price"> 
        </div>
        <div>
            <input type="submit" value="Save New Product">
        </div>
        </form>
</body>
</html>