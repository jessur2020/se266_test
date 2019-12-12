<?php
     include __DIR__ . '/model/model_DisneyVotes.php';
     include __DIR__ . '/functions.php';
     
     $votes = getVotes();
     echo $votes;
     
    $results = array();
    $results[0] = array(); // 
    $results[1] = array (); // 
  
    
    foreach ($votes as $v) {
        
        array_push($results[0], $v['DisneyCharacterName']);
        array_push($results[1], $v['VoteCount']);
        
    }
    
   // var_dump ($results);
   echo json_encode($results);
     
     
?>

