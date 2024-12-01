<?php include "assets/shared/process.php"?>

<!doctype html>
<html lang="en">

<?php include "assets/shared/head.php"?>

<body id="body" data-bs-theme="light">
  <div class="banner shadow">
    <div class="container d-flex flex-row flex-start py-3 align-items-center">
      <img src="../../../../assets/img/logo/pup.png" style="width: 50px">
      <img src="../assets/img/logo.png" class="ms-2" style="width: 50px">
      <img src="assets/img/logo.png" class="ms-2" style="height: 50px">
      <img src="assets/img/<?php echo $articleInformation->logo ?>" class="ms-2" style="height: 30px">
    </div>
  </div>

  <div class="container my-5 pt-3">

    <div class="row mb-2 mt-5">
      <div class="col">
        <div class="h6" style="color: <?php echo $articleInformation->categoryColor ?>">
          <b><?php echo $articleInformation->category ?></b>
        </div>
        <div class="h1 pb-4">
          <?php echo $articleInformation->headline ?>
        </div>
        <div>
          <?php
            echo implode(", ", $articleInformation->authorFullNames)
          ?>
          |
          <?php echo $articleInformation->publication ?>
        </div>
        <div class="text-secondary">
          <a href="mailto:test@gmail.com">test@gmail.com</a> | <a href="tel:09876543211">09876543211</a>
        </div>
        <div class="text-secondary mb-4">
          Published <?php echo $articleInformation->datetime ?> PHT
        </div>

        <hr>
      </div>
    </div>

    <div class="row mt-2 mb-3">
      <div class="col">
        <div style="height: auto; max-height: 60vh; width: 100%; overflow: hidden;">
          <img src="assets/banners/<?php echo $articleInformation->banner ?>" style="width: 100%;">
        </div>
        <div class="px-4 pt-2 text-secondary">
          <?php echo $articleInformation->photoDescription ?> <i><?php echo $articleInformation->photoSource ?>.</i>
        </div>
      </div>
    </div>

    <div class="row my-3">
      <div class="col">
        <?php echo $articleInformation->content ?>
      </div>
    </div>

    <div class="container text-center pt-5 overflow-hidden">
      <img src="assets/img/CS WM B.png" style="height: 40px" id="footerImage">
    </div>
  </div>

  <?php include "assets/shared/footer.php"?>
</body>

</html>