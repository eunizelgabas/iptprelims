<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
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
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="{{asset('assets/seafoods.jpg')}}"  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Seafoods</h5>
                  <p class="card-text">Seafood is an excellent source of top quality protein, and compares favorably with meat and chicken.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{asset('assets/kr_streetfood.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Korean Food</h5>
                  <p class="card-text">South Korean food is unbelievably delicious. Korean Food Korean food is unique. It's known for its spicy flavor and the use of other seasonings to enhance the taste.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{asset('assets/nachos.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nachos</h5>
                  <p class="card-text">They are one of the most versatile quick bites a person can put together to feed a sudden craving or a crowd for a party.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{asset('assets/icecrem.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Icecream</h5>
                  <p class="card-text">It has a refreshing effect in the hot summer months. Moreover, people generally tend to like sweet things.</p>
                </div>
              </div>
            </div>
          </div>
    </div> 
</body>
</html>