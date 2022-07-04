<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show all Products</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php  foreach ($products as $products_key => $products_val) { ?>
      <tr>
        <td><?= $products_key + 1 ?></td>
        <td><?php echo $products_val['title'] ?></td>
        <td><?php echo $products_val['description'] ?></td>
        <td><?php echo $products_val['amount'] ?></td>
        <td><?php echo  $products_val['status'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<h1>Count of All active users: <b><?php echo $total_users['all_users'] ?></b></h1>
<h1>Count of active and verified users who have attached active products:<b><?php echo $total_active['users'] ?></b></h1>
<h1>Count of all active products (just from products table):<b><?php echo $total_products['all_products'] ?></b></h1>
<h1>Amount of all active attached products.<b><?php echo $t_amount['amount'] ?></b></h1>
<h1>Count of active products which don't belong to any user.<b><?php echo $b_products['products'] ?></b></h1>
<h1>Summarized price of all active attached products</h1>
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Value</th>
        <th>Amount of one value</th>
        <th>Summerize</th>
      </tr>
    </thead>
    <tbody>
    <?php  foreach ($summarized as $summarized_key => $summarized_val) { ?>
      <tr>
        <td><?= $summarized_key + 1 ?></td>
        <td><?php echo $summarized_val['title'] ?></td>
        <td><?php echo $summarized_val['value'] ?></td>
        <td><?php echo $summarized_val['single_amount'] ?></td>
        <td><?php echo  $summarized_val['amount'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table><br><br>
  <h1> Summarized prices of all active products per user</h1>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>User Name</th>
        <th>Value</th>
        <th>Amount of one value</th>
        <th>Summerize</th>
      </tr>
    </thead>
    <tbody>
    <?php  foreach ($summarizedPrices as $summarizedPrices_key => $summarizedPrices_val) { ?>
      <tr>
        <td><?= $summarizedPrices_key + 1 ?></td>
        <td><?php echo $summarizedPrices_val['title'] ?></td>
        <td><?php echo $summarizedPrices_val['name'] ?></td>
        <td><?php echo $summarizedPrices_val['qty'] ?></td>
        <td><?php echo  $summarizedPrices_val['single_amount'] ?></td>
        <td><?php echo  $summarizedPrices_val['all_amount'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table><br><br>
  <h1>The exchange rates for USD based on Euro<br></br><b><?php echo $USD_to_EUR ?></b></h1><br>
  <h1>The exchange rates for RON based on Euro<br></br><b><?php echo $RON_to_EUR ?></b></h1><br>
</body>
</html>
