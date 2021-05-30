<?php include_once "header.php"; ?>
<style>
article>div{
    color: #696969;
    box-shadow: 0 20px 27px -20px #000;
    padding: 2.9em;
    margin: .9em;
  }
  div h2{
    text-align: center;
    line-height: 2.8em;
  }
  div p{
    padding: .2em;
    line-height: 1.6em;
  }
  div a{
    text-transform: capitalize;
    text-decoration: none;
    color: #696969;
    float: right;
    padding: .4em .6em;
    margin: 2.3em;
    border: 2px solid tomato;
    border-radius: 4px;
    outline: none;
  }
  form input{
    border: none;
    outline: none;
    text-transform: capitalize;
    padding: .6em;
    font-size: 1em;
  }
  form button{
    border: 3px solid lightblue;
    border-radius: 3px;
    background-color: transparent;
    text-transform: capitalize;
    cursor: pointer;
    color: #696969;
    padding: .4em .6em;
    outline: none;
    font-size: 1em;
  }
</style>
<?php
   $search = mysqli_real_escape_string($dbConnection,htmlentities($_REQUEST['search']));
   $sql_search_command = "SELECT * FROM article WHERE title LIKE '%$search%' OR content LIKE '%$search%' OR date LIKE '%$search%' OR time LIKE '%$search%' ORDER BY id DESC;";
    $stmt_connection = mysqli_stmt_init($dbConnection);
    mysqli_stmt_prepare($stmt_connection,$sql_search_command);
    #mysqli_stmt_bind_param($stmt_connection,"ssii",$search,$search,$search,$search);
    mysqli_stmt_execute($stmt_connection);
   $results = mysqli_stmt_get_result($stmt_connection);
   echo mysqli_num_rows($results)." results found.";
   echo "<main>";
   while ($row = mysqli_fetch_assoc($results)) {
       echo "<article>
              <div>
                <h2>".$row['title']."</h2>
                <p>".$row['content']."</p>
                <time>Time: ".$row['time']."</time>
                <time>Date: ".$row['date']."</time></br>
                <a href='#'>reade more...</a></br>
                <form>
                  <input name = '".$row['id']."' placeholder = 'add comment..'/>
                  <button onclick = 'saveComment(this)' type = 'button'>post comment</button>
                </form>";
                $id = $row['id'];
                printComments($id);
        echo "</div>
              </article>";
   }
   echo "</main>";
   function printComments ($id){
     include 'php/dbConnection.php';
     $sqli_comments_command = "SELECT * FROM comments WHERE article_id = ? ORDER BY comment_id DESC;";
     $stmt = mysqli_stmt_init($dbConnection);
     mysqli_stmt_prepare($stmt,$sqli_comments_command);
     mysqli_stmt_bind_param($stmt,"i",$id);
     mysqli_stmt_execute($stmt);
     $comments = mysqli_stmt_get_result($stmt);
     #$comments = mysqli_query($dbConnection,$sqli_comments_command);
     foreach ($comments as $comment) {
       echo "<div>
              <p>".$comment['comment']."</p>
              <time>Posted time: ".$comment['time']."</time>
              <time>Posted date: ".$comment['date']."</time><hr>
             </div>";
     }
   }
  ?>
<script defer="true" src="js/search.js"></script>
<?php include_once "footer.php" ?>
