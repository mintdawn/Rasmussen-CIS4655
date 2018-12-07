<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Shrikhand" rel="stylesheet">

    <title>Dawn Summerall Course Project</title>
  </head>
  <body>
    <?php include 'header.html'; ?>
    <?php include 'navbar.html'; ?>

<!-- the mod 5 assignment -->
    <div class="container-fluid bg-light p-4">
      <h2>Bootstrap Forms Page</h2>
      <form action="" class="main-form needs-validation" novalidate>
      <!-- two text boxes -->
        <div class="form-group">
          <label for="textbox1">Textbox 1</label>
          <input type="text" class="form-control" id="textbox1" placeholder="TextBox 1" required>
            <div class="invalid-feedback">Enter something in the textbox.</div>
        </div>
        <div class="form-group">
          <label for="textbox2">Textbox 2</label>
          <input type="text" class="form-control" id="textbox2" placeholder="TextBox 2" required>
            <div class="invalid-feedback">Enter something in the textbox.</div>
        </div>
      <!-- one textarea -->
        <div class="form-group">
          <label for="textarea">A textarea</label>
          <textarea type="text" class="form-control" id="textarea" placeholder="A textarea" required></textarea>
            <div class="invalid-feedback">Write something.</div>
        </div>
      <!-- one set of checkboxes -->
        <h4>Choose a thing</h4>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="checkbox1">
          <label class="form-check-label" for="checkbox1">
            Checkbox 1
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" value="" id="checkbox2">
          <label class="form-check-label" for="checkbox2">
            Checkbox 2
          </label>
          <div class="invalid-feedback">Choose something.</div>
        </div>
      <!-- one set of radio buttons -->
        <h4>Choose a another thing</h4>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radios" id="radio1" value="option1" checked>
          <label class="form-check-label" for="radio1">
            Option 1
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="radios" id="radio2" value="option2">
          <label class="form-check-label" for="radio2">
            Option 2
          </label>
          <div class="invalid-feedback">Choose something.</div>
        </div>
      <!-- a dropdown with three options -->
        <div class="form-group">
          <label for="dropdown">Choose an Option</label>
          <select class="form-control" id="dropdown" required>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <div class="invalid-feedback">Choose an option.</div>
        </div>
      <!-- the submit button -->
        <button type="submit" class="btn btn-dark mb-2">Submit</button>
      </form>
    </div>
    <?php include 'description.html'; ?>
    <?php include 'footer.html'; ?>

      <!-- Form Validation JS -->
        <script>
          var form = document.querySelector('.needs-validation');

          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false ) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          })
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
    </html>
