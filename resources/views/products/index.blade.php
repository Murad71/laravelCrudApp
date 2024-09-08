<!DOCTYPE html>
<html lang="en">

<head>

  <title>Laravel Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark">

    <div class="container-fluid">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" href="/">Products</a>
        </li>
      </ul>
    </div>

  </nav>

  <div class="container">
    <div class="d-flex justify-content-end">
      <a href="{{route('products.create')}}" class="btn btn-dark mt-2 mb-3">New Product</a>
    </div>
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">Sno.</th>
          <th scope="col">Name</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
      <tr>
        <td>{{$loop->index + 1}}</td>
        <td><a href="products/{{$product->id}}/view" class="text-light">{{$product->name}}</a></td>
        <td>
        <img src="products/{{$product->image}}" class="rounded-circle" width="50" height="50" alt="loading..." />
        </td>
        <td><a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
        <form method="POST" class="d-inline" action="products/{{$product->id}}/delete">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
        </td>
      </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>