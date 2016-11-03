<?php
require 'classes/database.php';

$database = new Database;

// $database->query('Select * from posts where id= :id');
// $database->bind(':id',1);
//
// $rows = $database->resultset();

// print_r($rows);

/***************************************/

// if ($_POST['submit']) {
  // echo 'SUBMITTED';
// }

/***************************************/

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//DELETE DATA
if(isset($_POST['delete_id'])){
  if ($_POST['delete']) {
  $delete_id = $_POST['delete_id'];
  $database -> query('DELETE FROM posts WHERE id = :id');
  $database -> bind(':id',$delete_id);
  $database -> execute();
}}


// if(isset($_POST['delete_id'])){
//   if ($_POST['delete_id']) {
//     echo $_POST['delete_id'];
//   }
// }

/************************************/

if ($post['submit']) {
  $id = $post['id'];
  $title = $post['title'];
  $body  = $post['body'];

  // echo $title;
  // echo '<br/>';
  // echo $body;

// // INSERT DATA
//   $database->query('insert into posts (title, body) values (:title, :body)');
//   $database->bind(':title',$title);
//   $database->bind(':body',$body);
//   $database->execute();

// UPDATE DATA
  $database->query('UPDATE posts SET title= :title, body = :body WHERE id = :id');
  $database->bind(':title',$title);
  $database->bind(':body',$body);
  $database->bind(':id',$id);
  $database->execute();


  if ($database->lastInsertId()) {
    echo '<p>Post added!</p>';
  }
}

// echo print_r($_POST);

$database->query('Select * from posts');
$rows = $database->resultset();

?>

<h1>Add post</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

     <label>Post ID</label>
     <br/>
     <input type="text" name="id" placeholder="Specify ID" />
     <br/>

     <label>Post title</label>
     <br/>
     <input type="text" name="title" placeholder="Add a title..." />
     <br/>
     <label>Post body</label>
     <br/>
     <textarea name="body"></textarea>
     <br/>
     <br/>
     <input type="submit" name="submit" value="Submit" />

</form>

<h1>Post</h1>
<div>
     <?php foreach($rows as $row) :  ?>
     <div>
          <h3><?php echo $row['title']; ?></h3>
          <p>
               <?php echo $row['body']; ?>
          </p>
          <br/>
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
               <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>" />
               <input type="submit" name="delete" value="Delete" />
          </form>
     </div>
     <?php endforeach; ?>
</div>
