<!DOCTYPE html>
<html>
<head>
    <title>Pay with Stripe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
</head>
<style type="text/css">
    h2{
        margin:80px auto;
    }    
</style>
<body>
 
     {{-- <div class="jumbotron header-shadow h-100 d-inline-block " style="background-image: url('/images/bg-2.png'); background-color:rgba(102, 92, 92, 0.5); background-size: cover;">
  
        <div class="container text-center">
            <h1 style="font-size: 40px;">The Last Legends</h1>
            <p >Resize this responsive page to see the effect!</p> 
            <a type="button" href="/stripe"  class="btn btn-info text-center"> Back </a><br>
          
        </div>
        </div> --}}
        <div class="jumbotron header-shadow h-100 d-inline-block " style="background-image: url('/images/bg-2.png'); background-size: cover;">
  
            <div class="container text-center">
                <h1 class="text-center">The Last Legends</h1>      
                <p>Some text that represents "Me"...</p>
                <a type="button" href="/" class="btn btn-info text-dark">Back</a><br>
              
            </div>
            </div>
    <div class="container-fluid text-center ">
  
</div>
<div class="container">
    <h2 class="text-center">Pay with Stripe</h2>
    
    <div class="row">
        <div class="col-md-7 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <h3 class="panel-title text-center"><strong>Payment Details</strong></h3>
                </div>
                <div class="panel-body">
    
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
    
                        <form 
                            role="form" 
                            action="{{ route('stripe.post') }}" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> 
                                <input class='form-control' size='4' type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> 
                                <input id="cardNumber" autocomplete='off' class='form-control card-number' size='20' type='text'>
                               
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> 
                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> 
                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class='col-xs-12 form-group card required'>
                            <label class="control-label">Pay Amount</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input class="form-control" type="text" name="price" placeholder="Enter amount">
                            </div>
                            </div>
                        </div>
                        
    
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try again.</div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                            </div>
                        </div>
                            
                    </form>
                </div>
            </div>        
        </div>
    </div>
        
</div>

</body>
    
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function(event) {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
    var input = document.getElementById("cardNumber");
    
input.onkeydown = function (event) {
    const inputValue = event.target.value.replace(/\s/g, ''); // remove existing spaces
  if (inputValue.length > 0) {
    const formattedValue = inputValue.match(/.{1,4}/g).join('  '); // add spaces after every 4 digits
    event.target.value = formattedValue;
  }

    
}
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
            
        }
    }
     
});
</script>
</html>
