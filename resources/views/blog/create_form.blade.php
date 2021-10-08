<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Document</title>
</head>
<body>
    <div class="container front">
       
            <form id="contact" action="/index" method="POST" enctype="multipart/form-data">
                @csrf
              
              <h3>Create Blog</h3>
              
              <fieldset>
                <input placeholder="Title" name="title" type="text" tabindex="1" required autofocus>
              </fieldset>
              
              <fieldset>
                <textarea placeholder="Description...." name="description" tabindex="5" required></textarea>
              </fieldset>
              <fieldset>
                <input 
                type="file"
                name="image"
                class="hidden">              </fieldset>
              
              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
              </fieldset>
            </form>
          
        
      
    </div>
</body>
</html>