<?php
//post articles to blog page
  include 'dbConnection.php';
  //include 'viewusers.php';
  $sqli_articles_command = "SELECT * FROM article ORDER BY id DESC LIMIT ".$_REQUEST['data'].",3;";
  $stmt = mysqli_stmt_init($dbConnection);
  mysqli_stmt_prepare($stmt,$sqli_articles_command);
  mysqli_stmt_execute($stmt);
  $articles = mysqli_stmt_get_result($stmt);
  foreach ($articles as $value) {
     echo "<article>
            <div>
             <h2>".$value['title']."</h2>
             <p>".$value['content']."</p>
             <time>Time: ".$value['time']."  Date: ".$value['date']."</time></br>
             <a href='#'>read more...</a></br>
             <form>
               <input name = '".$value['id']."' placeholder = 'add comment..'/>
               <button onclick = 'saveComment(this)' type = 'button'>post comment</button>
             </form>";
           $id = $value['id'];
           printComments($id);
    echo   "</div>
          </article>";
  }
  function printComments ($id){
    include 'dbConnection.php';
    $sqli_comments_command = "SELECT * FROM comments WHERE article_id = $id ORDER BY comment_id DESC;";
    $stmt = mysqli_stmt_init($dbConnection);
    mysqli_stmt_prepare($stmt,$sqli_comments_command);
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
