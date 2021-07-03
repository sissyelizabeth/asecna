@extends('index')

@section('content-dashboard')
    <h1>facturation</h1>
    <div class=”container mt-5 text-center”>

<h2>Laravel 7 PayPal Integration Example</h2>

<div class="flex-center position-ref full-height">


<div class="content">


    <div class="links">
        <div id="paypal-button"></div>
    </div>
</div>
</div>


</div>
@endsection

@section('script')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
      paypal.Button.render({
        env: 'sandbox', // Or 'production'
        style: {
          size: 'large',
          color: 'gold',
          shape: 'pill',
        },
        local:'en_us',
        client:{
            sandbox:'AXQucGaFlxZn156Gp_jiBv8aOIfYeSo757MfR-fSBNkgRbVePOUdUvypt8r6FdRmLfxyiyt_w5_3fp3m',
            production:'demo_production_client_id'
        },
        // Set up the payment:
        // 1. Add a payment callback
        payment: function(data, actions) {
          // 2. Make a request to your server
            return actions.payment.create({
                transactions: [{
                    amount:{
                        total:'0.01',
                        currency:'USD'
                    }
                }]
            })
        },
        // Execute the payment:
        // 1. Add an onAuthorize callback
        onAuthorize: function(data, actions) {
          // 2. Make a request to your server
          return actions.payment.execute().then(function(details){
              window.alert('Thank ypu for your purchase')
              console.log(data)
              console.log(details);
          })
        }
      }, '#paypal-button');
    </script>
@endsection