@extends('layouts.app')

@section('content')

        <script src="https://js.stripe.com/v3/"></script>

        <form method = "post" action = "" id="form">
        @csrf

            <div class="form form-cb" align="center"> 

                <div id="card-element" style="width: 300px;">
                <!-- A Stripe Element will be inserted here. -->           
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div><br>
                <button id="card-button">Pay</button>   
            </div>

        </form>
<script>

    var stripe = Stripe('Your Stripe-key');
    var elements = stripe.elements();
    var cardElement = elements.create('card');

    cardElement.mount('#card-element');

    // Add an instance of the card UI component into the `card-element` <div>
    var cardHolderName = document.getElementById('card-holder-name');
    var cardButton = document.getElementById('card-button');

    cardButton.addEventListener('click', async (e) => {
    var { paymentMethod, error } = await stripe.createPaymentMethod(
        'card', cardElement, {
            billing_details: { name: cardHolderName.value }
        }
    );
    if (error) {
        console.log('error');
        } else {
                var payment_id = paymentMethod.id;
                createPayment(payment_id);
        }   
    });

    var form = document.getElementById('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
    });

    // Submit the form with the token ID.
    function createPayment(payment_id) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'payment_id');
    hiddenInput.setAttribute('value',payment_id);
    form.appendChild(hiddenInput);
    // Submit the form

    form.submit();

    }

</script>

@endsection