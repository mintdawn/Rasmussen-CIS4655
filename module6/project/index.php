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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Dawn Summerall Course Project</title>
  </head>
  <body>
      <?php include 'header.html';?>
      <?php include 'navbar.html';?>
  <div class="container-fluid w-100 bg-light text-secondary">
    <div class="row">
      <div class="col-sm-6 p-4 text-justify">
        <h4>The page that should show the notification</h4>
<!-- cut and paste from https://codepen.io/Vagelis90/pen/pJWEGR -->
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
      <div class="col-sm-6 p-4 text-justify">
        <p>Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females as an. That do an case an what plan hour of paid. Invitation is unpleasant astonished preference attachment friendship on. Did sentiments increasing particular nay. Mr he recurred received prospect in. Wishing cheered parlors adapted am at amongst matters.

        Surprise steepest recurred landlord mr wandered amounted of. Continuing devonshire but considered its. Rose past oh shew roof is song neat. Do depend better praise do friend garden an wonder to. Intention age nay otherwise but breakfast. Around garden beyond to extent by.

        Folly words widow one downs few age every seven. If miss part by fact he park just shew. Discovered had get considered projection who favourable. Necessary up knowledge it tolerably. Unwilling departure education is be dashwoods or an. Use off agreeable law unwilling sir deficient curiosity instantly. Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share least.

        Offered say visited elderly and. Waited period are played family man formed. He ye body or made on pain part meet. You one delay nor begin our folly abode. By disposed replying mr me unpacked no. As moonlight of my resolving unwilling.

        Same an quit most an. Admitting an mr disposing sportsmen. Tried on cause no spoil arise plate. Longer ladies valley get esteem use led six. Middletons resolution advantages expression themselves partiality so me at. West none hope if sing oh sent tell is. </p>
      </div>
    </div>
  </div>
  <?php include 'description.html'; ?>
  <?php include 'footer.html'; ?>

<!-- scripts -->

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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
