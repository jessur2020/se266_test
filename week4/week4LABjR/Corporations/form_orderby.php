<form action="#" method="post">
    Order By:
    <select name="column">
        <option value="id">id</option>
        <option value="corp">corp</option>
        <option value="incorp_dt">incorp_dt</option>
        <option value="email">email</option>
        <option value="owner">owner</option>
        <option value="phone">phone</option>
        
    </select>
    <input type="hidden" name="action" value="OrderBy" />
    <input type="submit" name="order" value="Order By">
</form>





/* 
********************************************************************************************
 */
 
        <?php
 
        include __DIR__ . '/model/model_corporations.php';
        include __DIR__ . '/functions.php';
    include './includes/form_orderby.php';
    
    $action = filter_input(INPUT_POST, 'action');
    
    if ( $action === 'Search' ) {
        echo 'Search';
    }
    if ( $action === 'OrderBy' ) {
        echo 'Order By';
    }
?> 



<form action="#" method="post">
    Search By:
    <select name="column">
        <option value="id">id</option>
        <option value="corp">corp</option>
        <option value="incorp_dt">incorp_dt</option>
        <option value="email">email</option>
        <option value="owner">owner</option>
        <option value="phone">phone</option>
        
    </select>
    <input type="hidden" name="action" value="Search" />
    <input type="submit" name="search" value="Search"><br /><br />
</form>
        
    <h3>Serach Corporations</h3>
    

    <form class="form-horizontal" action="#" method="post">
       
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Search by Corporation Name:</label>
      

     <div class="col-sm-10">

         
                  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Search by
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Corporation</a></li>
      <li><a href="#">Date</a></li>
      <li><a href="#">Email</a></li>
       <li><a href="#">Owner</a></li>
      <li><a href="#">Phone</a></li>
    </ul>
  </div>
      <input type="radio" name="optradio" checked>Ascending</label>
      <input type="radio" name="optradio">Descending </label>
     

        <input type="text" class="form-control" id="corp" placeholder="Enter company name" name="corp"  value="TEST GET">
      </div>
    </div>
  <input type="hidden" name="action" value="Search" />
    <input type="submit"  class="btn btn-default" name="search" value="Search">
    <button type="reset"  class="btn btn-default" value="Reset">Reset</button>

    