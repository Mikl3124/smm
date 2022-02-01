@extends('layouts.app')

@section('content')

<form action="{{ route('product.store') }}" method="post">
    @csrf
    <div class="container">
        <div class="mb-3">
            <label for="product-name" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" id="product-name" name="name" placeholder="Nom du produit">
        </div>
        <div class="mb-3">
            <label for="product-price" class="form-label">Prix du produit</label>
            <input type="number" step="0.01" class="form-control" name="price" id="product-price" placeholder="Prix du produit">
        </div>
        <button class="btn btn-success" type="submit">Enregistrer</button>
    </div>
</form>

@endsection