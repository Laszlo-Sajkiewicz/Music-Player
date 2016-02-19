<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="View/music.view.css" media="screen" charset="utf-8">
    <title>Music</title>
  </head>
  <body>
    <h1>Music player</h1>

    <?php
      foreach ($tab['listMusic'] as $key => $value) {
    ?>
    <a href="<?= $value->musicPath ?>">
      <img src="<?= $value->imagePath ?>" alt="Nom image" />
    </a>
    <?php
      }
    ?>

    <footer>
      <p>Posted by: Laszlo Sajkiewicz</p>
      <p>
        Contact information:
        <a href="mailto:laszlo.sajkiewicz@gmail.com">laszlo.sajkiewicz@gmail.com</a>
      </p>
    </footer>
  </body>
</html>
