<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIEW</title>
</head>
<body>
    <h1>LIST OF PRODUCTS</h1>
    <div>
        @if (session()->has('success'))
        <div>
            {{session('success')}}
        </div>
            
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('product.create')}}">Add product</a>
        </div>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Product name</th>
                <th>SUPPLIER</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            @foreach ($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->pname}}</td>
              <td>{{$product->p_supplier}}</td>
              <td>{{$product->pquantity}}</td>
              <td>{{$product->p_price}}</td>
              <td>
                <a href="{{route('product.edit',['product'=>$product])}}">Edit</a>
              </td>
              <td>
                <form method="post" action="{{route('product.destroy',['product'=> $product])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
              </td>
            </tr> 
            @endforeach
          
        </table>
    </div>
</body>
</html>