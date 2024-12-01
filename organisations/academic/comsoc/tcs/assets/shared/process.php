<?php
include("connect.php");
include("assets/php/classes.php");

$articleID = $_GET['article'];
$articleInformation = "";

if (isset($articleID)) {
  $articlesQuery = "SELECT * FROM tcsarticles JOIN categories ON tcsarticles.categoryID = categories.categoryID WHERE articleID = '$articleID'";
  $articlesResult = executeQuery($articlesQuery);

  if (mysqli_num_rows($articlesResult) > 0) {
    while ($articleRow = mysqli_fetch_assoc($articlesResult)) {
      $articleInformation = new Article(
        $articleID,
        $articleRow['headline'],
        $articleRow['banner'],
        $articleRow['description'],
        $articleRow['categoryName'],
        $articleRow['datetime'],
        $articleRow['photoDescription'],
        $articleRow['photoSource'],
        $articleRow['content'],
        $articleRow['color']
      );
    }
  } else {
    header("Location: index.php");
  }
} else {
  header("Location: index.php");
}
?>