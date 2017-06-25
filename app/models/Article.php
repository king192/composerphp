<?php
/**
* Article Model
*/
class Article
{
  public static function first()
  {
    $connection = mysqli_connect("localhost","root","root");
    if (!$connection) {
      die('Could not connect: ' . mysqli_error($connection));
    }

    mysqli_set_charset($connection, "UTF8");

    mysqli_select_db($connection, "mffc");

    $result = mysqli_query($connection,"SELECT * FROM articles");

    $res = '';
    if ($row = mysqli_fetch_assoc($result)) {
      // echo '<h1>'.$row["title"].'</h1>';
      // echo '<p>'.$row["content"].'</p>';
      $res = $row;
    }

    mysqli_close($connection);
    return $res;
  }
}