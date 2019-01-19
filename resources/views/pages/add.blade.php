<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Data Page</title>

        <link href="{{ asset('css/add.css') }}" rel="stylesheet"/>
        <script src="{{ asset('js/page_control.js') }}"></script>
    </head>
    <body>

        <div id="contact-form">

            <div style="background-color:lightslategray; color:white;">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>                
                @endif
            
            </div>

            <h1> Add New Product </h1><br/>
            
            <form method="post" action="/admin/store" enctype="multipart/form-data">

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div>
                  <label for="name">
                      <span class="required">Name: </span> 
                      <input type="text" id="name" name="name" value="" placeholder="Your Name" required="required" tabindex="1" autofocus="autofocus" />
                  </label> 
                </div>
                <div>		          
                    <label for="type">
                    <span>Type: </span>
                        <select id="type" name="type">   
                           <option value="Ball">Ball</option>
                           <option value="Men Clothes">Men Clothes</option>    
                           <option value="Women Clothes">Women Clothes</option>
                           <option value="Sport Clothes">Sport Clothes</option>
                           <option value="Shoe">Shoe</option>
                           <option value="Sport Shoe">Sport Shoe</option>
                           <option value="Material">Material</option>
                        </select>
                     </label>
                </div>
                <div>		          
                  <label for="companies">
                  <span>Companies: </span>
                      <select id="companies" name="companies">   
                         <option value="Adidas">Adidas</option>
                         <option value="Converse">Converse</option>  
                         <option value="Nike">Nike</option>
                         <option value="Puma">Puma</option>
                         <option value="Umbro">Umbro</option>
                         <option value="UnderArmour">UnderArmour</option>
                      </select>
                  </label>
                </div>
                <div>
                    <label for="image">
                        <span class="required">Image File: </span> 
                        <input type="file" id="image" name="image"  required="required"/>
                    </label> 
                </div>
                <div>
                    <label for="price">
                        <span class="required">Price: </span> 
                        <input type="text" id="price" name="price" placeholder="Pirce"  required="required"/>
                    </label> 
                </div>
                <div>		          
                  <label for="description">
                      <span class="required">Description: </span> 
                      <textarea id="description" name="description" placeholder="Descript about your product..." required="required"></textarea> 
                  </label>  
                </div>
                <div>		           
                  <button name="submit" type="submit" id="submit" onclick="bntAddEvent()">Save</button> 
                </div>
            </form>
                
        </div>
    </body>
</html>