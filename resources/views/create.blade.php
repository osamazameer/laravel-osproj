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
    <h2>View All <a href="view"></a></h2>
    <form method="post" action="save">
    @csrf
  <label>Item:</label><br>
  <input type="text"  name="item" ><br>
  <label>Category:</label><br>
  <input type="text"  name="cat" ><br><br>
  <label>Price:</label><br>
  <input type="text"  name="price" ><br><br>  
  <input type="submit" value="Submit">
</form> 


    </body>
</html>
