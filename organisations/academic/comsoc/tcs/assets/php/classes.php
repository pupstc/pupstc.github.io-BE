<?php

class Article
{
  public $headline = "";
  public $banner = "";
  public $description = "";
  public $category = "";
  public $datetime = "";
  public $photoDescription = "";
  public $photoSource = "";
  public $content = "";
  public $categoryColor = "";
  public $publication = "";
  public $logo = "";
  public $articleID = "";
  public $authorFullNames = [];

  public function __construct(
    $articleID,
    $headline,
    $banner,
    $description,
    $category,
    $datetime,
    $photoDescription,
    $photoSource,
    $content,
    $categoryColor
  ) {
    $this->articleID=$articleID;
    $this->headline = $headline;
    $this->banner = $banner;
    $this->description = $description;
    $this->category = $category;
    $this->datetime = $datetime;
    $this->photoDescription = $photoDescription;
    $this->photoSource = $photoSource;
    $this->content = $content;
    $this->categoryColor = $categoryColor;

    $this->loadAuthors();
    $this->setAdditonalInfo();
  }

  public function setAdditonalInfo()
  {
    $publicationQuery = "SELECT * FROM userArticles JOIN users ON userArticles.userID = users.userID JOIN publications ON users.publicationID = publications.publicationID WHERE articleId = '$this->articleID' AND isMainAuthor = 'yes';";
    $publicationResult = executeQuery($publicationQuery);

    while ($publicationRow = mysqli_fetch_assoc($publicationResult)) {
      $this->logo = $publicationRow['logo'];
      $this->publication = $publicationRow['publicationName'];
    }
  }

  public function loadAuthors(){
    $authorsQuery = "SELECT * FROM userArticles JOIN users ON userArticles.userID = users.userID WHERE articleId = '$this->articleID'";
    $authorsResult = executeQuery($authorsQuery);

    while ($authorsRow = mysqli_fetch_assoc($authorsResult)) {
      array_push($this->authorFullNames, $authorsRow['firstName']." ".$authorsRow['lastName']);
    }
  }
}

?>