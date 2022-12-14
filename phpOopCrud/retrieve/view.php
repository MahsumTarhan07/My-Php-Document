<!doctype html>
<html lang="en">

<head>
  <title>View Php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <?php
  include_once("crud.php");
    $viewdata = new Crud();
    $costumers = $viewdata->displayRecord();
    ?>

  <table class="container table mt-4">
    <tr class="text-dark">
      <th>ID</th>
      <th>Name</th>
      <th>Lastanme</th>
      <th>City Name</th>
      <th>Email</th>
    </tr>

    <tr>

      <?php
        foreach ($costumers as $customer){  
      ?>

      <td>
        <?php echo $customer["ID"]; ?>
      </td>
      <td>
        <?php echo $customer["names"]; ?>
      </td>
      <td>
        <?php echo $customer["lastname"]; ?>
      </td>
      <td>
        <?php echo $customer["city_name"]; ?>
      </td>
      <td>
        <?php echo $customer["email"]; ?>
      </td>

    </tr>

    <?php
    }
  ?>
  </table>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>