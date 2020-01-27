<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User Dashboard</title>
</head>
<style>
    .header{
        display:block;
    }

    .nav-position{
        position:fixed;
        width:100%;
        z-index:2;
        top: 50px;
    }

    .banner{
        max-width:100%;
        display:flex;
        flex-direction:column;
        margin-top:10px;
    }

    .banner img{
        height:500px;
        object-fit:cover;
        margin-top:50px;
    }

    #display-items{
        height:500px;
        margin-top:5px;
    }	
    
    #display-items img{
        width:100%;
        object-fit:cover;
        height:300px;
    }

    .text-design{
        text-align:center;
        background-color:blue;
        margin-top:1px;
        z-index:1;
    }

    .button-style{
        float:right;
    }

    #head {
        position: fixed;
        margin-top:0px;
        background-color: white;
        width:100%;
        z-index:2;
        text-align:center;
        padding:10px;
    }
    
</style>
<body>
    <h1 id='head'>Hello Welcome {{strtoupper($userName->name)}}</h1>
    <div class="header">
        <div class="navbar-div">
            <nav class="navbar navbar-inverse nav-margin nav-position">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="{{route('returnUserHomePage')}}">WebSiteName</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{route('returnUserHomePage')}}">Home</a></li>
                            <li><a href="{{route('userProductPage')}}">Product</a></li>
                            <li><a href="{{route('userInformationProfile')}}">View Profile</a></li>
                            <li><a href="{{route('userCartItem')}}">Cart Items</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <form class="form-inline glyphicon" action="{{route('searchItems')}}" method="GET">
                            <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>	
                    </div>
                </div>	
            </nav>
        </div>
    </div>
    <div class="container mt-4">
			<div class="banner">
      <img src="/storage/imageFile/laptop.png" alt="Product Image">
					<div class="row">
						<div class="col-sm-12 text-design">
							<h1>Available Products!!!</h1>
						</div>
					</div>
			</div>
    </div>  
			
      <div class="container" style='background-color:gray'>
        <div class="row">
          @foreach($items as $item)
            <div class="col-sm-4" id="display-items">
              <img src="/storage/imageFile/{{$item->productImage}}" alt="Product Image">
                <div class="row">
                  <div class="col-sm-6">
                    <h3>Product Description</h3>
                  </div>
                  <div class="col-sm-6">
                  <form action="{{route('addToCart',['id'=>$item->id])}}" method="GET">
					<button type="submit" class=" button-style btn btn-primary btn-lg">Add to Cart</button>
				 </form>
                  </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
          
</body>
</html>