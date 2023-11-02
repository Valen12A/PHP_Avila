<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>
</head>
<body>
<form action="{{route(brand.store)}}" method="POST">
        @csrf
        <h2>Form Brands</h2>
        <label for="name">NOMBRE:</label>
        <input type="text">

        <button type=submit class='btn'> Enviar </button>

    </form>
</body>
</html>
