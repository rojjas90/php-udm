<?php
require 'classes/database.php';

$database = new Database;

// $database->query('Select * from posts');

$database->query('Select * from posts where id= :id');
$database->bind(':id',1);

$rows = $database->resultset();

// print_r($rows);

?>


<h1>Post</h1>
<div >
  <?php foreach($rows as $row) :  ?>
  <div>
    <h3><?php echo $row['title']; ?></h3>
    <p>
      <?php echo $row['body']; ?>
    </p>
  </div>
<?php endforeach; ?>
</div>
