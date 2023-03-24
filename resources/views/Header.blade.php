<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Last Legends</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .header-shadow{
    
        max-height: 500px!important;
}
/* @media only screen and (min-width: 768px) {
         .header-shadow
         {
          height: 120px; / height: 50%;
         }
     } */
  </style>
</head>
<body>



<div class="jumbotron header-shadow h-100 d-inline-block " style="background-image: url('/images/bg-2.png'); background-size: cover;">
  
<div class="container text-center">
    <h1 class="text-center">The Last Legends</h1>      
    <p>Some text that represents "Me"...</p>
    <a type="button" href="/stripe" class="btn btn-info text-dark">Buy Now</a><br>
  
</div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <div class="row" >
    <div class="col-sm-3">
      <img src="{{asset('/images/ahri_card.png')}}" class="img-responsive" style="width:100%" alt="Image">
      <p>Some text..</p>
    </div>
    <div class="col-sm-3"> 
        <img src="{{asset('/images/akali_card.png')}}" class="img-responsive" style="width:100%" alt="Image">
        <p>Some text..</p>
    </div>
    <div class="col-sm-3"> 
        <img src="{{asset('/images/ashe_card.png')}}" class="img-responsive" style="width:100%" alt="Image">
        <p>Some text..</p>
    </div>
    <div class="col-sm-3">
        <img src="{{asset('/images/lux_card.png')}}" class="img-responsive" style="width:100%" alt="Image">
        <p>Some text..</p>
    </div>
  </div>
</div><br>

{{-- <div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div> --}}
<br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
