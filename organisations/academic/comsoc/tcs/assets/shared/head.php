<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" property="og:title" content="<?php echo $articleInformation->headline ?> | <?php echo $articleInformation->publication ?>">
  <meta name="type" property="og:type" content="website">
  <meta name="url" property="og:url" content="pupstc.github.io">
  <meta name="image" property="og:image"
    content="https://pupstc.github.io/organisations/academic/comsoc/tcs/assets/banners/<?php echo $articleInformation->banner ?>">
  <meta name="description" property="og:description" content="<?php echo $articleInformation->description ?>">

  <link rel="icon" href="../assets/img/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <title><?php echo $articleInformation->headline ?> | <?php echo $articleInformation->publication ?></title>

  <style>
    .banner {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      background-color: white;
      font-family: 'Poppins';
    }
  </style>
</head>