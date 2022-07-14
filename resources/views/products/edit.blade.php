<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <h1>Editar produto</h1>
    <form action="/products/update/{{ $product->id }}" method="post">
        @csrf
        <input name="name" value="{{ $product->name}}">
        <input name="description" value="{{ $product->description}}">
        <input type="number" name="price" value="{{ $product->price}}">
        <button type="submit">Salvar</button>
    </form>

    <form action="/products/delete/{{ $product->id }}" method="post">
        @csrf
        <button type="submit">Deletar</button>
    </form>
</body>
</html>