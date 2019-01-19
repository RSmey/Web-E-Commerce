<html>
<head></head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>TYPE</th>
                <th>COMPANIES</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>IMAGE</th>
                <th>EDIT & DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->type}}</td>
                <td>{{$data->companies}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img src="/logo_images/SportShop/{{$data->image}}" style="width:100px;height:80px;"/></td>
                <td>
                    <a href="/edit/{{$data->id}}"><button type="submit">Edit</button></a>
                    <a href="/delete/{{$data->id}}"><button type="submit">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>