<html lang="en">
<head>
  <title>View Corporations SQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        
    <div class="col-sm-offset-2 col-sm-10">
        <h1>Corporations</h1>
    
    <?php
        
        include __DIR__ . '/model/model_corporations.php';
        include __DIR__ . '/functions.php';
        if (isPostRequest()) {
            $id = filter_input(INPUT_POST, 'teamId');
            deleteCorps ($id);

        }
        $corps = getCorps ();
        
    ?>
  
    <table class="table table-striped">
            <thead>
                <tr>
                 
                    <th>Company Name</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Zip code</th>
                    <th>Owner</th>
                    <th>Phone</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
           
            
            <?php foreach ($corps as $row): ?>
                <tr>
                    <td>
                        
                            <form action="view.php" method="post">
                            <input type="hidden" name="corpsId" value="<?php echo $row['id']; ?>" />
                            <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                            <?php echo $row['corp']; ?>
                        </form>
                   </td>
                    <td><?php echo $row['division']; ?></td> 
                    <td><a href="editTeam.php?action=update&teamId=<?php echo $row['id']; ?>">Edit</a></td> 
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="editCorporations.php?action=add">Add Corporation</a>
    </div>
    </div>
</body>
</html>