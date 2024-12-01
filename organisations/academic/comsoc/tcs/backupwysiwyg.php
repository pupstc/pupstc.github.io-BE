<?php

$headline = "From PUP Sta. Mesa to PUP Sto. Tomas: New Computers Arrived";
$banner = "B0001.jpg";
$description = "PUP Sto. Tomas has received 25 new computers from PUP Manila, significantly upgrading the university's computer laboratories.";
$category = "FEATURE";
$author = "Denmar Redondo, Eliaza Mae Malibiran, Ericka Maynete";
$publication = "The Cloud Sentinel";
$datetime = "Nov 24, 2024 6:00 PM";
$photoDescription = "ComLab 2 with the new computers installed.";
$photoSource = "John Doe";

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" property="og:title" content="<?php echo $headline ?> | <?php echo $publication ?>">
  <meta name="type" property="og:type" content="website">
  <meta name="url" property="og:url" content="pupstc.github.io">
  <meta name="image" property="og:image"
    content="https://pupstc.github.io/organisations/academic/comsoc/tcs/assets/banners/<?php echo $banner ?>">
  <meta name="description" property="og:description" content="<?php echo $description ?>">

  <link rel="icon" href="../assets/img/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="assets/components/richtexteditor/rte_theme_default.css" />

  <title><?php echo $headline ?> | <?php echo $publication ?></title>

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

<body>
  <div class="banner shadow">
    <div class="container d-flex flex-row flex-start py-3 align-items-center">
      <img src="../../../../assets/img/logo/pup.png" style="width: 50px">
      <img src="../assets/img/logo.png" class="ms-2" style="width: 50px">
      <img src="assets/img/logo.png" class="ms-2" style="height: 50px">
      <img src="assets/img/CS WM B.png" class="ms-2" style="height: 30px">
    </div>
  </div>

  <div class="container my-5 pt-3">

    <div class="row mb-2 mt-5">
      <div class="col">
        <div class="h6">
          <b><?php echo $category ?></b>
        </div>
        <div class="h1 pb-4">
          <?php echo $headline ?>
        </div>
        <div>
          <?php echo $author ?> | <?php echo $publication ?>
        </div>
        <div class="text-secondary mb-4">
          Published <?php echo $datetime ?> PHT
        </div>
        <hr>
      </div>
    </div>

    <div class="row mt-2 mb-3">
      <div class="col">
        <div style="height: auto; max-height: 60vh; width: 100%; overflow: hidden;">
          <img src="assets/banners/<?php echo $banner ?>" style="width: 100%;">
        </div>
        <div class="px-4 pt-2 text-secondary">
          <?php echo $photoDescription ?> <i><?php echo $photoSource ?>.</i>
        </div>
      </div>
    </div>

    <div class="row my-3">
      <div class="col">
        <p>
          The Polytechnic University of the Philippines Sto. Tomas Campus has received 25 new computers from PUP Sta.
          Mesa, the University's main campus. This upgrade significantly enhances the campus computer laboratories,
          which are primarily used by students in technology-centered programs.

          Nineteen (19) of the new computers have been installed in Computer Laboratory 2, while two (2) were added to
          Computer Laboratory 1, which already had existing equipment. The installations were completed on November 23,
          2024, thanks to the efforts of BSIT 2-1 students.
        </p>

        <p>
          To ensure proper maintenance and organization, students who wish to use the updated computer laboratories must
          notify the Computer Society Officers in advance. The organization will monitor laboratory usage, keeping
          records of users and access times. All existing guidelines remain in place, including strict prohibitions on
          food, drinks, and liquids within the labs, to safeguard the equipment and maintain a productive environment.
        </p>

        <p>
          The new MSI computers come equipped with advanced specifications, including Intel Core i6 CPUs, GTX 1650 D6
          Ventus XS V3 4G GPUs, 1TB HDD, 512GB SSD, 16GB DDR4 RAM, and essential peripherals such as headphones,
          webcams, mice, and keyboards.
        </p>

        <p>
          This upgrade is expected to greatly benefit PUPians. With access to modern equipment, the Tomasinong Iskolar
          ng Bayan can conduct workshops, seminars, and other technology-focused events, enhancing their real-world
          experience and technical proficiency.
        </p>

        <p>
          The Computer Society is the official academic organisation of BSIT Students of PUP Sto Tomas Campus.
        </p>

        <div id="div_editor1">

        </div>

      </div>
    </div>

    <div class="container text-center pt-5 overflow-hidden">
      <img src="assets/img/CS WM B.png" style="height: 40px">
    </div>
  </div>

  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

  <!-- RICH TEXT EDITOR -->
  <script type="text/javascript" src="assets/components/richtexteditor/rte.js"></script>
  <script type="text/javascript" src='assets/components/richtexteditor/plugins/all_plugins.js'></script>
  <script>
    var editor1cfg = {}
    editor1cfg.toolbar = "basic";
    var editor1 = new RichTextEditor("#div_editor1", editor1cfg);
  </script>
</body>

</html>