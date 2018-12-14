<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/book.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Shrikhand" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <title>Dawn Summerall Course Project</title>
  </head>
  <body>
      <?php include 'header.html';?>
      <?php include 'navbar.html';?>
  <div class="container-fluid p-4">
    <h4>Notification Page</h4>
    <br>
    <p>The first notification was created with Toastr from the Professor's example code. I played around with the settings a little and customized it a little. I had trouble getting this going at first because of 1. I was getting errors because of mixed http and https in the code and 2. I was not putting the script for the notifications low enough down in the code. The creation of the second notification went much smoother than the first.</p>
    <button class="btn btn-primary btn-lg alert">Notification Style 1</button>
    <br>
    <br>
    <p>This second notification button is done with just plain JavaScript. I was able to use the standard Notification API features for this one. It should have a custom vibration if it is viewed from a phone. I have not checked this yet. I gave it both an icon and an image to see how those things worked. For me this notification pops up on my second monitor. When I submit the assignment photos I will try it with my phone to see if the virbation works.</p>
    <button class="btn btn-primary btn-lg notify" onclick="notifyMe();">Notification Style 2</button>
    <br>
  </div>
  <?php include 'description.html'; ?>
  <?php include 'footer.html'; ?>

<!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
       // trigger when button click
       $('.alert').on('click', function(){
        //toastr["error"]("Your error message here!");
        toastr.success('I finally got this thing working! -  <a href="https://github.com/mintdawn/Rasmussen-CIS4655/blob/master/module6/project/index.php">Click to view the code.</a>', 'Dawn Summerall')
       });

       toastr.options = {
         "closeButton": true,
         "debug": false,
         "newestOnTop": false,
         "progressBar": false,
         "positionClass": "toast-top-full-width",
         "preventDuplicates": false,
         "onclick": null,
         "showDuration": "300",
         "hideDuration": "1000",
         "timeOut": "10000",
         "extendedTimeOut": "1000",
         "showEasing": "swing",
         "hideEasing": "linear",
         "showMethod": "fadeIn",
         "hideMethod": "fadeOut"
       }
    </script>
    <script>
      function notifyMe() {
        if (!("Notification" in window)) {
          alert("This browser does not support system notifications.");
        }
        else if (Notification.permission === "granted") {
          notify();
        }
        else if (Notification.permission !== "denied") {
          Notification.requestPermission(function (permission) {
            if (permission === "granted") {
              notify();
            }
          });
        }
        function notify() {
          var notification = new Notification('Welcome to Module 6', {
            icon: "img/bell.png",
            body: "This is my JavaScript notification.",
            image: "img/pepper-beg.jpg",
            vibrate: [100, 50, 200, 50, 100],
          });
          notification.onclick = function() {
            notification.close();
          };
          setTimeout(notification.close.bind(notification), 10000);
        }
        }

    </script>

  </body>
</html>
