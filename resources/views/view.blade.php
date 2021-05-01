<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
        </style>
    </head>
    <body>
    <h2>Food Items <a href="/create">Add Items</a></h2>
<br>
{{session('msg')}}
<table>
  <tr>
    <th>Item Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Action</th>
  </tr>
@foreach($foodlist as $list)
  <tr>
    <td>{{$list->item}}</td>
    <td>{{$list->category}}</td>
    <td>{{$list->price}}</td>
    <td><a href="delete/{{$list->id}}">Delete</a></td>
  </tr>
@endforeach  

</table>
    </body>
</html>
