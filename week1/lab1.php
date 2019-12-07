<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Php Website</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    
  <style type="text/css">
    .line {clear: left; height: 40px;}
    .col1 {width:150px; float: left; font-weight: bold;}
    .col2 {float: left;}
    input[type=text] {  width: 50px;}
</style>
</head>
<body>
    <div><h1>Credit card interest rate calculator</h1></div>
    
    <div style="margin-left:40px;">
    <form name="creditCard" method="post">
        <div class="line">
            <div class="col1">Amount Owed:</div>
            <div class="col2"><input type="text" value="" name="amountOwed"></div>
            
        </div>
        <div class="line">
            <div class="col1">Interest Rate:</div>
            <div class="col2"><input type="text" value="" name="interestRate"></div>
            
        </div>
        <div class="line">
            <div class="col1">Monthly Payment:</div>
            <div class="col2"><input type="text" value="" name="monthlyPayment"></div>
            
        </div>
         <div class="line">
            <div class="col1">&nbsp;</div>
            <div class="col2"><input type="submit" value="Show Me The Damage" name="showDamage"></div>
            
        </div>
        
        
        
        
        
        
        
    </form>
    

 <table class="table table-striped" style="width:50%">
                    <tr>
                        <th>Month</th>
                        <th>Interest Paid</th>
                        <th>Owed</th>

                    </tr>
                    
                    
        <tbody>
        <?php
            $amountPaid = $_POST['amountOwed'];
            $interestRate = $_POST['interestRate'];
            $monthlyPayment = $_POST['monthlyPayment'];
            $interestPaid = '';
            if (isset($_POST['amountOwed']) && isset($_POST['interestRate']) && isset($_POST['monthlyPayment'])) {
                for ($i = 1; $amountPaid > 0; $i++) {
                    $interestPaid = $amountPaid * $interestRate / 100 / 12;
                    $amountPaid = $amountPaid - $monthlyPayment + $interestPaid;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo '$'.number_format((float)$interestPaid, 2, '.', ''); ?></td>
                        <td><?php 
                            if ($amountPaid > 0) {
                                echo '$'.number_format((float)$amountPaid, 2, '.', '');
                            } else {
                                $amountPaid = '';
                                echo $amountPaid;
                            }
                        ?></td>
                    </tr><?php
                }
            }
        ?>
        </tbody>
        </table>
            <h5>Total amount paid (Interest + Balance) : 
        <?php echo "$" . number_format($totalPaid, 2); ?>
    </h5>
        
</body>
</html>

////////////////////////////////////


<?php
/*
    (-) calculate the number of months required to pay off the amount owed along with the total amount spent.
        Be sure to also include a month by month overview of how the amount owed goes down.
NEWEST
  */
    $errorMsg="";
    $beginBalance=1000;
    $interest=15;
    $payment=100;
    $month=0;
    $totalPaid=0;
    $interestPaid2;
    if (isset($_POST['submit']))
    {
        $beginBalance = filter_input (INPUT_POST, 'beginBalance', FILTER_VALIDATE_FLOAT );
        if ($beginBalance == false){
            $errorMsg .= "<li>Please make sure the Balance is a number</li>";
        }
        
        $interest = filter_input (INPUT_POST, 'intRate', FILTER_VALIDATE_FLOAT );
        if ($interest == false) {
            $errorMsg .= "<li>Please make sure the Interest Rate is a number</li>";
        }
        
        $payment = filter_input (INPUT_POST, 'mnthPayment', FILTER_VALIDATE_FLOAT );
        if ($payment == false) {
            $errorMsg .= "<li>Please make sure the Interest Rate is a number</li>";
        }
    }
        $interestPaid = $beginBalance * $interest / 100 / 12;
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        
        body
        {
            margin:auto;
            width: 522px;
            padding:45px;
            border-left: dotted 8px gray;
            border-right: dotted 8px gray;
        }
        
        .formBox
        {
            margin-left: 10px;
            margin-bottom: 8px;
            width: 65px;
        }
        
    </style>
    
    
    <title>J Correira</title>
</head>
<body>
    <h1 style="font-size:50px;">Credit Card Interest Calculator</h1>
    <br>
    
<form method="post">
    Balance <input type="text" id="beginBalance" class="formBox" name="beginBalance" value="<?php echo $beginBalance;?>">
    <br />
    Interest Rate <input type="text" id="intRate" class="formBox" name="intRate" value="<?php echo $interest;?>">
    <br />
    Monthly Payment <input type="text" id="mnthPayment" class="formBox" name="mnthPayment" value="<?php echo $payment;?>">
    <br>

    <input type="submit" id="submit" name="submit" onclick="">
    <br>
    <br>
        
<div class="alert alert-danger" role="alert">
  <?php echo $errorMsg; ?>
</div>
  
</form>
       <br>

<table class="table table-striped" style="width:100%;">
    <tr>
        <th>Month</th>
        <th>Interest Paid</th>
        <th>Amount Owed</th>
    </tr>
    <tr>
        <?php
            $balance = $beginBalance;
            $totalPaid = $balance;
            $month = 0;
            while ($balance > 0)
            {
                $month++;              
                
                $interestPaid = $balance * $interest / 100 / 12;
                $balance = $balance - $payment + $interestPaid;
                $totalPaid = $totalPaid + $interestPaid;
                
                echo "<tr>";
                    //month column
                    echo "<td>";
                    echo $month;
                    echo "</td>";
                    
                    //interest paid
                    echo "<td>";
                    echo "$" . number_format($interestPaid, 2);
                    echo "</td>";
                    
                    if ($balance <= 0)
                    {
                        //owed column
                        echo "<td>";
                        echo "-------";
                        echo "</td>";                        
                    }
                    else 
                    {
                        //owed column
                        echo "<td>";
                        echo "$" . number_format($balance, 2);
                        echo "</td>";
                    }
                echo "</tr>";
            } 
            
            
        ?>
        
</table>
    
    <br>
    <h5>Total amount paid (Interest + Balance) : 
        <?php echo "$" . number_format($totalPaid, 2); ?>
    </h5>
    
</body>
</html>
