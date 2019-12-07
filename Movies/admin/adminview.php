<?php
        session_start();
        if(!isset($_SESSION['use'])) 
       {
           header('Location: adminlogin.php');  
       }
          echo "Welcome ";
          echo $_SESSION['use'];
          echo "<a href='adminlogout.php'> Logout</a> ";
          
          
        include __DIR__ . '/../models/model_movie.php';
        $listMovies = listMovies();
        
    ?>

<html lang="en">
    
<head>
  <title>Admin View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        
    <div class="col-sm-offset-2 col-sm-10">
        <h1>Movies</h1>
        
        
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Movie Name</th>
                </tr>
            </thead>
            <tbody>
                
                

            <?php foreach ($listMovies as $row): ?>
                <tr>
                    <td><?php echo $row['movie_id']; ?></td>
                    <td><?php echo $row['movie_name']; ?></td>
                    <td><a href="movireview.php?id=<?php echo $row['movie_id']; ?>">View Movie</a></td>
                    <td><a href="movieupdate.php?id=<?php echo $row['movie_id']; ?>">Update</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        
        
    </div>
    </div>
</body>
</html>