<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/book.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Shrikhand" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <title>Dawn Summerall Course Project</title>
  </head>
  <body>
      <?php include 'header.html';?>
      <?php include 'navbar.html';?>
  <div class="container-fluid">
    <div id="generator" class="jumbotron col-sm-6">

	<form>

		<input id="notification-title" type="text" placeholder="Notification title..." required>
		<input id="notification-message" type="text" placeholder="Notification message..." required>

		<div id="notification-type" class="btn-group" role="group">
		  <button type="button" class="btn btn-default">Success</button>
		  <button type="button" class="btn btn-default">Info</button>
		  <button type="button" class="btn btn-default">Warning</button>
		  <button type="button" class="btn btn-default">Error</button>
		</div>

	   <button id="generate" type="button" class="btn btn-primary disabled">Generate</button>

	</form>

</div>

<div id="notification" class="modal fade">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><i class="text-danger fa fa-exclamation-circle"></i>&nbsp;Error</h4>
      </div>
      <div class="modal-body">
        <p>An error occurred...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  </div>
  <?php include 'description.html'; ?>
  <?php include 'footer.html'; ?>

<!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- cut and paste from https://codepen.io/Vagelis90/pen/pJWEGR -->
      <script>
      $(document).ready(function(){

        $("#notification-type").on("click", ".btn", function(){
          $(this).parent().find(".btn-primary").removeClass("btn-primary");
          $(this).removeClass().addClass("btn btn-primary");
          $("#generate").removeClass("disabled");
        });

        $("#generate").on("click", function(){

          if($("#notification-title").val() == "" || $("#notification-message").val() == "") return;

          var title = $("#notification-title").val();
          var message = $("#notification-message").val();
          var type = $(".btn-group .btn-primary").text();
          var icon, color;
          switch (type){
              case "Success":
                icon = "fa-check-circle";
                color = "text-success";
                break;
              case "Info":
                icon = "fa-info-circle";
                color = "text-info";
                break;
              case "Warning":
                icon = "fa-exclamation-triangle";
                color = "text-warning";
                break;
              case "Error":
                icon = "fa-exclamation-circle";
                color = "text-danger";
                break;
            default:
          }

          notify(title, icon, color, message);
        });

        notify = function(title, icon, color, message){
          $("#notification .modal-body p").text(message);
          $("#notification .modal-title").html('<i class="' + color + ' fa ' + icon + '"></i>&nbsp;' + title);

          $("#notification").modal("show");
        }

      });
      </script>
  </body>
</html>
