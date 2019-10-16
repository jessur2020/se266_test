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
    <div style="margin-left:40px;">
    <form name="creditCard" method="post">
        <div class="line">
            <div class="col1">Amount Owed:</div>
            <div class="col2"><input type="text" value="1000" name="amountOwed"></div>
            
        </div>
        <div class="line">
            <div class="col1">Interest Rate:</div>
            <div class="col2"><input type="text" value="15.99" name="interestRate"></div>
            
        </div>
        <div class="line">
            <div class="col1">Monthly Payment:</div>
            <div class="col2"><input type="text" value="100" name="monthlyPayment"></div>
            
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
           
            
            <?php foreach ($creditCardas $row): ?>
                <tr>
                    <td><?php echo $row['amountOwed']; ?></td>
                    <td><?php echo $row['interestRate']; ?></td>
                     <td><?php echo $row['monthlyPayment']; ?></td>
                          
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
      
        
          
  <div class="col-sm-offset-2 col-sm-10"><a href="submit">View Actors</a></div>
                    
                    
                    
                    
                 </div>  
    
    



  
</body>
</html>


