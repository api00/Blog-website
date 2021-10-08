<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
.news{
    width: 70%;
    margin: 0 auto;
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
}
img{
    height: 400px;
}
</style>
<body>
   <div class="news">
    <h3>{{ $find->title }}</h3>
    <h4> {{ $find->user->name }}</h4>
    <p>{{ $find->description }}</p>
    <img src="{{ ('../images/'. $find->image_path) }}" alt="" srcset="">
    <a class='d-block' href="/index">Back</a>
   </div>
    
</body>
</html>