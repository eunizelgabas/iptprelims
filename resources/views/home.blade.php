<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <nav class="navbar justify-content-center" style="background-color: #ffd7b5;">
            <ul class="nav navbar-fixed-top">      
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/destination')}}">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/food')}}">Foods</a>
                </li>
            </ul> 
        </nav> 

        <div class="row">
            <div class="col-sm-6" style="margin-top: 60px">
              <div class="card" style="background-color: #ffb38a">
                <div class="card-body">
                  <h5 class="card-title">2018 photos</h5>
                  <p class="card-text">Wonderful moments with family</p>
                  <a href="#" class="btn btn-primary">Open folder</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6" style="margin-top: 60px">
                <div class="card" style="background-color: #e3a074">
                  <div class="card-body">
                    <h5 class="card-title">2019 photos</h5>Exclusive stories of myself</p>
                    <a href="#" class="btn btn-primary">Open folder</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6" style="margin-top: 50px ">
                <div class="card" style="background-color: #ffb38a">
                  <div class="card-body">
                    <h5 class="card-title">2020 photos</h5>
                    <p class="card-text">Good times from the weekend.</p>
                    <a href="#" class="btn btn-primary">Open folder</a>
                  </div>
                </div>
              </div>

            <div class="col-sm-6" style="margin-top: 50px">
              <div class="card" style="background-color: #e3a074">
                <div class="card-body">
                  <h5 class="card-title">2021-2022 photos</h5>
                  <p class="card-text">Day dreams and Happy days.</p>
                  <a href="#" class="btn btn-primary">Open folder </a>
                </div>
              </div>
            </div>
          </div>

        <div class="card text-center" style="margin-top: 125px">
            <div class="card-header" style="background-color:#e6a072">
              Memory Quote
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>"Sometimes you never know the value of moment until it becomes a memory"</p>
                <footer class="blockquote-footer">Dr. Seuss</footer>
              </blockquote>
            </div>
          </div>
    </div> 
</body>
</html>