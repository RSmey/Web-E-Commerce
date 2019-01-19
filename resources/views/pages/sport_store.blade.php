 @extends('layouts.app')

@section('content') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport Store</title>

    <link href="{{asset('css/sport_store_style.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet"/>
    <script src="js/sport_store_request.js"></script>
    {{--  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">  --}}

</head>
<body>
    <nav class="head-content">
        <a class="all-type-contents" href="a">Home</a>
        <a class="all-type-contents" href="a">About</a>
        <span class="all-type-contents">|</span>
        <a class="all-type-contents" href="a">Contact</a>
        <span class="all-type-contents">Or</span>
        <a class="all-type-contents" href="a">Services</a>
    </nav>
    <hbody>
        <div class="head-web-name-search-basket">
            <table>
                <tr class="search-type">
                    <td><img src="logo_images/LogoTop.gif"/></td>
                    <td class="head-search">
                        <input type="text" placeholder="SEARCH SPORT PRODUCTS..."/>
                        <button>
                            <a>SEARCH</a>
                            <a><img src="icon/Search.png"/></a>
                        </button>
                    </td>
                    <td>
                        <label>YOUR BASKET</label>
                    </td>
                </tr>
            </table>
                
        </div>
        <div class="main-container-HBar">
            <ul class="ul-hbar">
                <li><img src="/icon/home.png"/><a href="/page">Home</a></li>
                <li>
                    <label><a href="/page/clothes">Clothes</a></label>
                    <ul>
                        <li><a href="/page/clothes"></a>All</li>
                        <li>Simple Clothes</li>
                        <li>Sport Clothes</li>
                    </ul>
                </li>
                <li>
                    <label> <a href="/page/shoes">Shoes</a></label>
                    <ul>
                        <li>All</li>
                        <li>Simple shoes</li>
                        <li>Sport Shoes</li>
                    </ul>
                </li>
                <li>
                    <label><a href="/page/balls">Balls</a></label>
                    <ul>
                        <li>All</li>
                        <li>Footballs</li>
                        <li>Valleyballs</li>
                        <li>Baskitballs</li>
                        <li>Others</li>
                    </ul>
                </li>
                <li><a href="/page/other">Other</a></li>
            </ul>

            <div class="catagy-select-type">
                <select >
                    <option>All</option>
                    <option value="adidas">Adidas</option>
                    <option>Nike</option>
                    <option>PUMA</option>
                    <option>Converse</option>
                    <option>Umbro</option>
                    <option>UnderArmour</option>
                </select>
                <button class="catagy-go">Go</button>
            </div>

        </div>
    </hbody>

    <!-- Picture Slides -->
    <tbody >
        <div class="contain-image-slides" >
            <img class="companySlides" src="logo_images/image_slides/slide1.jpg" style="width:100%"/>
            <img class="companySlides" src="logo_images/image_slides/slide2.jpg" style="width:100%"/>
            <img class="companySlides" src="logo_images/image_slides/slide3.jpg" style="width:100%"/>
            <img class="companySlides" src="logo_images/image_slides/slide4.png" style="width:100%"/>
            <img class="companySlides" src="logo_images/image_slides/slide5.jpeg" style="width:100%"/>
            <img class="companySlides" src="logo_images/image_slides/slide6.jpg" style="width:100%"/>
        </div>
        <script>
            var Index=0;
            slidesShow();

            function slidesShow(){
                var i;
                var x=document.getElementsByClassName("companySlides");
                for(i=0;i<x.length;i++){
                    x[i].style.display="none";
                }
                Index++;
        
                if(Index > x.length){Index=1}

                x[Index-1].style.display="block";
                setTimeout(slidesShow, 3000);
            }
        </script>
    </tbody>

    <bbody>
        
        <div class="containers">
            
            <div class="sidebar-main">
                <div class="left-side-bar-contents">
                    @include('pages.sidebar.sidebar')
                </div>
            </div>

            <div class="show-items-pro">
                <div class="items">
                    
                </div>
            </div>

            <!-- <div class="row text-center">
                @foreach($product as $pro)
      
              <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                  <img class="card-img-top" src="/logo_images/SportShop/{{$pro->image}}" alt="">
                  <div class="card-body">
                    <h4 class="card-title">{{$pro->title_name}}</h4>
                    <p class="card-text">{{$pro->description}}</p>
                    <p class="card-text">Product of {{$pro->brand_name}}</p>
                    <p class="card-text prices-color">Price: {{$pro->price}}</p>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-primary">Details</a>
                    <a href="#" class="btn btn-primary">Buy It</a>
                    <a href="#" class="btn btn-primary">Save</a>
                  </div>
                </div>
              </div>
              @endforeach
      
            </div> -->
      
        </div>
      
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </bbody>

    <footer class="footer-container">
        <div class="foot-pro-logo">
            <a><img src="logo_images/logo_produce/adidas.jpg"/></a>
            <a><img src="logo_images/logo_produce/converse.jpg"/></a>
            <a><img src="logo_images/logo_produce/nike.jpg"/></a>
            <a><img src="logo_images/logo_produce/puma.jpg"/></a>
            <a><img src="logo_images/logo_produce/umbro.jpg"/></a>
            <a><img src="logo_images/logo_produce/underArmour.jpg"/></a>
        
        </div>
        
        <div class="footer-contain-contents">
            <table>
                <tr>
                    <td>
                        <ul>
                            <li>CUSTOMER SERVICE</li>
                            <li>A</li>
                            <li>B</li>
                            <li>C</li>
                            <li>D</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>ABOUT US</li>
                            <li>A</li>
                            <li>B</li>
                            <li>C</li>
                            <li>D</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>INFO</li>
                            <li>A</li>
                            <li>B</li>
                            <li>C</li>
                            <li>D</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Contect US</li>
                            <li>A</li>
                            <li>B</li>
                            <li>C</li>
                            <li>D</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </footer>

</body>
</html>

 @endsection 