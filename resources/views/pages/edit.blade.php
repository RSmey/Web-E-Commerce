<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Data Page</title>

        <link href="{{ asset('css/add.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <div id="contact-form">
            <h1> Edit Product </h1><br/>
                
            <form method="post" action="/update" enctype="multipart/form-data">
                {{csrf_field()}}
                {{--  <input type="hidden" name="_token" value="{{csrf_token()}}">  --}}
                
			<input type="hidden" name="id" value="{{$datas->id}}">
                <div>
                  <label for="name">
                      <span class="required">Name: </span> 
                      <input type="text" id="name" name="name" value="{{$datas->name}}" placeholder="Your Name" required="required" tabindex="1" autofocus="autofocus" />
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
                        <input type="text" id="price" name="price" value="{{$datas->price}}" placeholder="Pirce"  required="required"/>
                    </label> 
                </div>
                <div>		          
                  <label for="description">
                      <span class="required">Description: </span> 
                      <textarea id="description" name="description" placeholder="Descript about your product..." required="required">{{$datas->description}}</textarea> 
                  </label>  
                </div>
                <div>		           
                  <button name="submit" type="submit" id="submit" >Save</button> 
                </div>
            </form>
                
        </div>
    </body>
</html>