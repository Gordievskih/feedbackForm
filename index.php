<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cryptik</title>
</head>
<body>
<div class="modal_user d-none">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заполните форму</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          &times;
        </button>
      </div>
      <div class="modal-body">
      <form name="form" class="form" method="POST">
  <p><b>Ваше имя:</b><br>
  <input type="text" class="form-control" name="name" aria-label="Default" aria-describedby="inputGroup-sizing-default">
  </p>
  <p><b>Ваш номер:</b><br>
  <input type="text" class="form-control" name="phone" aria-label="Default" aria-describedby="inputGroup-sizing-default">
  </p>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary closeBtn" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-success">Отправить</button>
      </div>
</form>
      </div>
     
    </div>
  </div>
</div>
    <button class="btn btn-primary open-modal">Download Crypto</button>
</body>
<script src="js/script.js"> </script>
</html>