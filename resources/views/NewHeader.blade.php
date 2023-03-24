<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Last Legends</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }

  @media only screen and (min-width: 768px) {
         .header-shadow
         {
            background-size: cover
         }
     }
  
  </style>
</head>
<body>
    {{-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav> --}}

      <x-layout/>


<div class="container-fluid bg-3 text-center ">    
    
  <div class="row" >
    <div class="col-sm-3">
      <img src="{{asset('/images/ahri_card.png')}}" class="img-responsive" style="width:100%" alt="Image">
      <h3>Sakura</h3>
    </div>
    <div class="col-sm-3"> 
        <img src="{{asset('/images/akali_card.png')}}" class="img-responsive" style="width:100%" alt="Image">
      <h3>Ino</h3>
        
    </div>
    <div class="col-sm-3"> 
        <img src="{{asset('/images/ashe_card.png')}}" class="img-responsive" style="width:100%" alt="Image">
        <h3>Hinata</h3>
    </div>
    <div class="col-sm-3">
        <img src="{{asset('/images/lux_card.png')}}" class="img-responsive" style="width:100%" alt="Image">
        <h3>Tenten</h3>

    </div>
  </div>
</div><br>
{{-- <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

      <h2 class="mt-5">TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div> --}}

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>© 2023 Copyright: The Last Legends</p>
</div>

</body>
</html>
