<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Dawn Summerall - Cat Facts</title>
  </head>
  <body>

  <!-- top row -->
    <div class="jumbotron jumbotron-fluid bg-danger m-0 text-light" style="background:url(catheader.jpg) no-repeat center center / cover;">
      <div class="container">
        <div class="p-4" style="background-color: black;border: 1px solid black;opacity: 0.6; ">
          <h1 class="display-4">Cat Facts</h1>
        </div>
      </div>
    </div>

  <?php include 'navbar.html';?>

<!-- cat facts api -->
<div class="container-fluid text-center p-2">
  <div class="row justify-content-between">
    <div class="col-12 col-md-6">
      <p class="lead">Cat Facts courtesy of: <a href="https://github.com/alexwohlbruck/cat-facts" target="_blank" style="color:white;"><span class="label label-primary bg-primary rounded p-1"> the Cat Facts API </span></a></p>
    </div>
    <div class="col-12 col-md-6">
      <p class="lead">Warning: <span class="label label-primary bg-primary rounded p-1 text-light"> Could lead to silliness </span></p>
    </div>
  </div>
</div>
    <div class="card-columns p-4">
      <?php
      // Get cURL resource
      $curl = curl_init();
      // Set some options - we are passing in a useragent too here
      curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_URL => 'https://cat-fact.herokuapp.com/facts/random?animal=cat&amount=20',
          CURLOPT_USERAGENT => 'Codular Sample cURL Request'
      ));
      // Send the request & save response to $resp
      $resp = curl_exec($curl);
      // Close request to clear up some resources
      curl_close($curl);
      $result = json_decode($resp);
      $i = 1;
      foreach ($result as $catfact) {
        echo '<div class="card bg-light text-secondary p-3 text-center">';
        echo '<h4>' . $catfact->text . '</h4>';
        echo '<button type="button" class="btn btn-danger">';
        echo 'Cat Fact <span class="badge badge-light">' . $i . '</span>';
        echo '<span class="sr-only">cat facts</span>';
        echo '</button>';
        echo '</div>';
        $i++;
      }
       ?>
   </div>
   <div class="container-fluid bg-info text-light p-4">
     <p class="lead">Using your own creativity, translate the sketch used in the Module 3 Activity into a wireframe that uses the following style and layout components to the home page or other linked pages:</p>
     <ul>
       <li>At least 3 buttons that have badges. They can be any size you choose, as well as any style.</li>
        <ul>
          <li>Each of the red buttons inside the fact cards has a little counter badge. When the page retreives data from the cat facts API it goes through a loop and each time it goes through the loop it counts it and prints it in the card so each fact is numbered in the order it was retreived.</li>
        </ul>
       <li>At least 2 labels.</li>
        <ul>
          <li>There are two labels beneath the navbar</li>
        </ul>
       <li>At least 1 jumbotron.</li>
        <ul>
          <li>There's a jumbotron at the top with a picture in it.</li>
        </ul>
       <li>At least 1 card. The button on the card must link to another page of content.</li>
        <ul>
          <li>There are a ton of cards that are each holding a piece of data from the <a href="https://github.com/alexwohlbruck/cat-facts" target="_blank">Cat Facts API</a>.</li>
        </ul>
     </ul>
     <p class="lead">The transparent black block of text in the jumbotron could use some work. I'd like it to float to the left when viewed from a large device and then become centered with smaller text on smaller device. That might be a lesson for another day though.</p>
   </div>

  <?php include 'footer.html';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
