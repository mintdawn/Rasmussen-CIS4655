<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Dawn Summerall Module 2 Activity</title>
  </head>
  <body>
    <div class="container-fluid bg-dark p-3 wrapper">
      <div class="container bg-warning text-dark p-2">
        <h1 class="display-4">Dawn Summerall - Module 2 Activity</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm bg-light text-secondary p-4">
            <h1>Column One</h1>
            <hr>
            <p>Create a basic template that uses the following:
            <ul>
              <li>A 3-column grid.</li>
              <li>The first column displays text that contains one h1 header and formatted text.</li>
              <li>The second column contains a form with at least 2 button styles.</li>
              <li>The third column contains a responsive image of your choice that resizes as the browswer window size changes.</li>
            </ul>
          </div>
          <div class="col-sm bg-light text-secondary p-4 ">
            <h2>A Form with Some Buttons</h2>
            <hr>
            <form action="" method="post">
              <div class="form-group">
                <label for="name"><strong>Enter your name.</strong></label>
                <input type="text" class="form-control" name="name"  placeholder="name">
              </div>
              <p><strong>Do you have a pet?</strong></p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pets" id="pets1" value="option1" checked>
                <label class="form-check-label" for="pets1">
                  No, I don't have a pet.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pets" id="pets2" value="option2">
                <label class="form-check-label" for="pet2">
                  Yes, I have a dog.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pets" id="pets3" value="option3">
                <label class="form-check-label" for="pet3">
                  Yes, I have a cat.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pets" id="pets4" value="option4">
                <label class="form-check-label" for="pet4">
                  Yes, I have a rabbit.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pets" id="pets5" value="option5">
                <label class="form-check-label" for="pet5">
                  Yes, I have a hamster.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pets" id="pets6" value="option6">
                <label class="form-check-label" for="pet6">
                  Yes, I have a reptile.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pets" id="pets7" value="option7">
                <label class="form-check-label" for="pet7">
                  Yes, I have a fantastic beast!
                </label>
              </div>
              <br>
              <button type="submit" class="btn btn-dark btn-lg text-warning">Submit</button>
              <div class="container output text-center">
                <?php
                  $name = $_POST['name'];
                  $name = ucfirst(strtolower($name));

                  if ($_POST['name'] == "" || $_POST['pets'] == ""){
                    echo "Enter your name and answer the question.";
                  } else {

                    switch ($_POST['pets']) {
                    case "option1":
                    echo "<br><span class='text-success h4'>Hello $name, you should get a pet!</span><br>";
                    break;
                    case "option2":
                    echo "<br><span class='text-success h4'>Hello $name, take good care of your dog!</span><br>";
                    break;
                    case "option3":
                    echo "<br><span class='text-success h4'>Hello $name, cats are the best pets!</span><br>";
                    break;
                    case "option4":
                    echo "<br><span class='text-success h4'>Hello $name, take good care of your bunny!</span><br>";
                    break;
                    case "option5":
                    echo "<br><span class='text-success h4'>Hello $name, hamsters are so cute!</span><br>";
                    break;
                    case "option6":
                    echo "<br><span class='text-success h4'>Hello $name, reptiles are such cool pets!</span><br>";
                    break;
                    case "option7":
                    echo "<br><span class='text-success h4'>Hello $name, you are lucky to have such a fantastic beast!</span><br>";
                    break;
                  }
                }
                ?>
              </div><!--output-->
            </div>

          <div class="col-sm bg-light text-secondary p-4">
            <h2>Pepper the Cat</h2>
            <hr>
            <img src="peppercoat.jpg" class="img-fluid rounded mx-auto" alt="Pepper cat">
            <p>My tux cat wearing my grand-daughter's jacket.</p>
          </div>
        </div><!--row-->
      </div>
    </div><!--wrapper-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
