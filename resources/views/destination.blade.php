<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
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
        
        <div class="card-group" style="margin-top: 50px">
          <div class="card">
            <img src="{{asset('assets/sunset.jpg')}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Boracay</h5>
              <p class="card-text">Tropical Paradise. The breathtaking sceneries of Boracay never fail to attract a lot of travelers
                who want to see the island's beauty first hand. The island boasts of crystal azure waters, powdery white sand, abundant 
                flora and fauna, and diverse marine life.</p>
              <p class="card-text"><small class="text-muted">Planned Destination</small></p>
            </div>
          </div>
          <div class="card">
            <img src="{{asset('assets/paris.jpg')}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Paris</h5>
              <p class="card-text">Paris has some breathtaking viewpoints. Seeing one of the views is amazing which is another one of the reasons to visit Pariss.</p>
              <p class="card-text"><small class="text-muted">Planned Destination</small></p>
            </div>
          </div>
          <div class="card">
            <img src="{{asset('assets/korea.jpg')}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Korea</h5>
              <p class="card-text">South Korea boasts abundant tourist attractions. Tourists can experience distinctive harmony 
                between historical cultural heritage and modern culture. With these preserved local identities, tourists can also explore 
                and enjoy local cultures, natural environments, and unique food.</p>
              <p class="card-text"><small class="text-muted">Planned Destination</small></p>
            </div>
          </div>
        </div>
    </div> 
</body>
</html>