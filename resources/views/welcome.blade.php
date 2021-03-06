@extends('layouts.app')

@section('content')
    <div class="text-center">
        <a href="{{ route('product.create') }}" class="btn btn-secondary mb-3"> Créer un produit</a>
    </div>
    <div class="container">
        <div class="pricing-table-wrapper">
            <form action="{{ route('product.payment') }}" method="post">
                @csrf
                <ul class="pricing-table">
                <li class="pricing-table__item">
                    <input type="hidden" value="product-1">
                    <img src="https://css-tricks.ir/wp-content/themes/css-tricks-ir-1396/images/products/packages/1.svg" alt="" class="pricing-table__img" />
                    <h3 class="pricing-table__title">package title</h3>
                    <p class="pricing-table__description">
                        <span class="pricing-table__tagline">The tagline goes here</span>
                        <span class="pricing-table__price">800 €</span>
                    </p>
                    <ul class="pricing-table__products">
                        <li class="pricing-table__product"><a href="">Included item title</a></li>
                        <li class="pricing-table__product"><a href="">Included item title</a></li>
                        <li class="pricing-table__product pricing-table__product--excluded"><a href="">Excluded item title</a></li>
                        <li class="pricing-table__product pricing-table__product--excluded"><a href="">Excluded item title</a></li>
                    </ul>
                    <button type="submit" class="pricing-table__button">Acheter</button>
                </li>
            </form>
            
                <li class="pricing-table__item pricing-table__item--popular" data-popular="Popular">
                <img src="https://css-tricks.ir/wp-content/themes/css-tricks-ir-1396/images/products/packages/2.svg" alt="" class="pricing-table__img" />
                <h3 class="pricing-table__title">package title</h3>
                <p class="pricing-table__description">
                    <span class="pricing-table__tagline">The tagline goes here</span>
                    <span class="pricing-table__price">800</span>
                    <span class="pricing-table__label">900 is the real price</span>
                    <span class="pricing-table__save">You save 100</span>
                </p>
                <ul class="pricing-table__products">
                    <li class="pricing-table__product"><a href="">Included item title</a></li>
                    <li class="pricing-table__product"><a href="">Included item title</a></li>
                    <li class="pricing-table__product"><a href="">Included item title</a></li>
                    <li class="pricing-table__product"><a href="">Included item title</a></li>
                </ul>
                <a href="https://mojtabaseyedi.com" class="pricing-table__button">continue</a>
                </li>
                <li class="pricing-table__item">
                <img src="https://css-tricks.ir/wp-content/themes/css-tricks-ir-1396/images/products/packages/3.svg" alt="" class="pricing-table__img" />
                <h3 class="pricing-table__title">package title</h3>
                <p class="pricing-table__description">
                    <span class="pricing-table__tagline">The tagline goes here</span>
                    <span class="pricing-table__price">800</span>
                    <span class="pricing-table__label">900 is the real price</span>
                    <span class="pricing-table__save">You save 100</span>
                </p>
                <ul class="pricing-table__products">
                    <li class="pricing-table__product pricing-table__product--excluded"><a href="">Excluded item title</a></li>
                    <li class="pricing-table__product"><a href="">Included item title</a></li>
                    <li class="pricing-table__product"><a href="">Included item title</a></li>
                    <li class="pricing-table__product"><a href="">Included item title</a></li>
                </ul>
                <a href="https://mojtabaseyedi.com" class="pricing-table__button">continue</a>
                </li>
            </ul>
        </div>
    </div>

@endsection