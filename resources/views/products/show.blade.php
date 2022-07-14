<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <h1>Detalhes do produto</h1>
    <h3> {{ $product->name}} </h3>
    <p> {{ $product->description}} </p>
    <p> R${{ number_format($product->price, 2, ',', '.') }} </p>
    <a href="/products/edit/{{ $product->id }}"> Editar</a>

</body>
</html>