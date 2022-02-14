<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <style>
    .main{
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      grid-auto-rows: minmax(100px, auto);
    }
    .banner{
      background-size: auto;
      background-image: url("Images/image_handler.aspx.jpeg");
      height: 200px;
      width: 1000px;
      grid-column: 1;
    }
    .container{
      grid-row:2;
      width: 800px;
      padding: 50px;
      margin: 20px;
      top: 50%;
      left: 65%;
      -ms-transform: translateY(50%);
      transform: translateY(50%);
    }

    .buttonDiv{
      margin: 40px;
      padding: 10px;
      position:absolute;
      left:29%;
      top: 50%;
    }

    .Welcome{
      text-align:center;
      color:red;
    }
  </style>
</head>
<body>
<div class="main">
  <div class="banner">
  </div>
  <div class="container">
    <h1 class="Welcome">Welcome to Bank of NJIT </h1>
    <div class ="buttonDiv">
      <a href="Transaction.php">
        <button class="transaction">Transcation</button>
      </a>
      <a href="Passbook.php">
        <button class="passbook">Passbook</button>
      </a>
      <a href="ManageCustomer.php">
        <button class="manageCustomer">Manage Customer</button>
      </a>
    </div>
  </div>
</div>
</body>
</html>