<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>
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
    <form action="{{route('product.update',['product'=>$product])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label>Product name:</label>
            <input type="text" name="pname" value="{{$product->pname}}"> <br>
        </div>
        <div>
            <label>Supplier's name:</label>
            <input type="text" name="p_supplier" value="{{$product->p_supplier}}">
        </div>
        <div>
            <label>Product quantity:</label>
            <input type="number" name="pquantity" value="{{$product->pquantity}}"> 
        </div>
        <div>
            <label>Product price:</label>
            <input type="number" name="p_price" value="{{$product->p_price}}"> 
        </div>
        <div>
            <input type="submit" value="Update Product">
        </div>
        </form>
</body>
</html>