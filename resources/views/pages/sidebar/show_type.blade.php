
<div class="show-page-container"> 
        <div class="item">
            <div class="sidebar-list">
                <ul>
                    <li><a>All</a></li>
                    <li><a>Ball</a></li>
                    <li><a>Men Clothes</a></li>
                    <li><a>Women Clothes</a></li>
                    <li><a>Sport Clothes</a></li>
                    <li><a>Shoe</a></li>
                    <li><a>Sport Shoe</a></li>
                    <li><a>Materail</a></li>
                    <li><a>Others</a></li>
                </ul>
            </div>
        </div>
        <div class="item">
            <div class="main-page-head">
                <h1>MenClothes</h1>
            </div>
            <div class="main-page-show">
                <div class="row text-center">
                    @foreach($product as $pro)      
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                              <img class="card-img-top" src="/logo_images/SportShop/{{$pro->image}}" alt="">
                              <div class="card-body">
                                    <h4 class="card-title">{{$pro->name}}</h4>
                                    <p class="card-text">{{$pro->description}}</p>
                                    <p class="card-text">Product of {{$pro->companies}}</p>                                
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
                      
                </div>
            </div>
        </div>
    </div> 