<?php
  include_once './list.php';
  session_start();
?>
<!DOCTYPE html>
<head>
  <title>Deposit</title>
  <link rel="stylesheet" href="./Deposit.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
  
<div>
  <header class="header">
      <div class="brand">
          <h1><i class='bx bxs-bank'></i> Banking System</h1>
      </div>
          <div class="pages">
            <a href="./index.php">HOME</a>
            <a href="./Transaction.php">TRANSACTIONS</a>
            <a href="./Deposit.php">DEPOSIT</a>
            <a href="./Withdrawel.php">WITHDRAWAL</a>
            <a href="./search.php">SEARCH</a>
          </div>
      </header>
</div>

  <div class="header-diposit">
    <h1 class="title" ><i class='bx bx-money-withdraw'></i>Withdrawal Details</h1>
  </div>
  
  <div class="container">
    <form class="form" action="newTransaction.php" method="POST">
      <lable>Account No:</lable><br>
      <input type="text" id="id" name="id" required><br><br>
      <lable>User Name:</lable><br>
      <input type="text" id="name" name="name" required><br><br>    
      <lable>Type:</lable><br>
      <input type="text" id="type" name="type" value="Withdrawal" readonly><br><br>
      <lable>Amount:</lable><br>
      <input type="text" id="amount" name="amount" required><br><br>
      <lable>NIC:</lable><br>
      <input type="text" id="nic" name="nic" required><br><br>
      
      <button type="submit" id="diposit">Withdraw</button>
      <button type="reset" id="clear">Cancel</button><br>
    </form>
    <img src="withdrawel.png">
  
  </div>

  <script src="https://unpkg.com/scrollreveal"></script>

        <script>
             const sr = ScrollReveal({
            distance: '80px',
            duration: 1250,
            reset: true,
            scroll: true
        });

        sr.reveal('form', {
            delay: 650,
            origin: 'left'
        });
        sr.reveal('title', {
            delay: 650,
            origin: 'top'
        });

        sr.reveal('table', {
            delay: 650,
            origin: 'bottom'
        });

        sr.reveal('img', {
            delay: 650,
            origin: 'top'
        });

        sr.reveal('.header', {
            delay: 650,
            origin: 'top'
        });
        </script>

  
</body>
</html>