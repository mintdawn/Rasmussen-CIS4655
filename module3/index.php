<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Dawn Summerall Mod 3 Discussion</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
  <div class="container-fluid p-4 text-secondary">
    <h1>NavBar Example</h1>
    <p class="lead">What's wrong with this navbar?</p>
    <br>
<!-- Radio Buttons -->
  <form action="index.php" method="post">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radios" id="answer1" value="option1">
      <label class="form-check-label" for="exampleRadios1">
        A. The navbar is cluttered and has too many options for the user to choose from.
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radios" id="answer2" value="option2">
      <label class="form-check-label" for="exampleRadios2">
        B. The navbar is using the navbar-light class with a dark background.
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="radios" id="answer3" value="option3">
      <label class="form-check-label" for="exampleRadios2">
        C. The navbar is not responsive when viewed from a mobile device.
      </label>
    </div>
    <br>
    <button type="submit" class="btn btn-secondary btn-lg">Submit</button><br>

  </form>
  <hr>
    <?php
      if ($_POST['radios'] == ""){
        echo "<p class='text-secondary'>Please, select the problem this navbar is displaying.</p>";
      } else {
        switch ($_POST['radios']) {

  				case "option1":
  				echo "<h4 class='text-danger'>A is not the correct answer. The navbar uses the following best practice.</h4>";
          echo "<div class='m-2 lead'>";
          echo "<br><span class='text-secondary'>Keep the navbar simple and uncluttered. If there are too many buttons, images or text on the navbar, it can make the actual links hard to find. Having unnecessary elements on a navbar can make users have to wade through content to get where they want to go.</span>";
          echo "</div>";
  				break;

          case "option2":
          echo "<h4 class='text-success'>B is the correct answer. The navbar does not use the following best practice.</h4>";
          echo "<div class='m-2 lead'>";
          echo "<br><span class='text-secondary'>Use proper color contrast to make sure your links stand out on the page. Links that stand out on the page are easy to find and make your site easier to navigate. Using color to bring attention to clickable elements is a best practice for UI/UX design.</span>";
          echo "</div>";
          break;

          case "option3":
          echo "<h4 class='text-danger'>C is not the correct answer. The navbar uses the following best practice.</h4>";
          echo "<div class='m-2 lead'>";
          echo "<br><span class='text-secondary'>Make sure the navbar is responsive for mobile devices. A navbar should collapse to a vertical layout so it is easier to read and click when it is viewed on a hand held device. If a navbar remains expanded when viewed from a mobile device, the user will have to adjust the screen size to see and click the links.</span>";
          echo "</div>";
          break;
        }
      }
    ?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
