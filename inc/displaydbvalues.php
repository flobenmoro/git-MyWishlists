
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Item</th>
      <th>Quantity</th>
      <th>Remarks</th>
    </tr>
  </thead>



  <tbody>
    

    
    <?php
    //display the values in database


      //query statement
      $sql = "select * from wishlisttable";
      
      //query proper
      $qr = $conn->query($sql);
      
      while($row=$qr->fetch_array()){
        echo '<tr>';
          echo '<td>' . $row['id'] . '</td>';
          echo '<td>' . $row['Product'] . '</td>';
          echo '<td>' . $row['Quantity'] . '</td>';
          echo '<td>' . $row['Remarks'] . '</td>';
          //echo '<td> <a href="deleteindb.php?item='. $row['id'].'" class="btn btn-success btn-sm" value=1>'  . '<span class="glyphicon glyphicon-trash"></span> DELETE</a> </td>';
          //echo '<td> <a href="deleteindb.php" class="btn btn-success btn-sm" name="delbut" value='.$row['id'].' formmethod="post">'  . '<span class="glyphicon glyphicon-trash"></span> DELETE</a> </td>';
          echo '<td> <form action="deleteindb.php" method="POST">';
            echo '<button type=submit class="btn btn-success btn-sm" name="delbut" value='.$row['id'].'><span class="glyphicon glyphicon-trash"></span> DELETE</button>';
          echo '</form> </td>';
        echo '</tr>';
      }
      

    ?>


  </tbody>



</table>
