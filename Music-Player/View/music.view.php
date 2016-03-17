<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="View/music.view.css" media="screen" charset="utf-8">
    <title>Music</title>
  </head>
  <body>

<svg viewBox="0 0 800 600">
  <symbol id="s-text" >

    <text text-anchor="middle"
          x="50%"
          y="35%"
          class="text--line"
          >
       Music
    </text>
    <text text-anchor="middle"
          x="50%"
          y="68%"
          class="text--line2"
          >
      Player
    </text>

  </symbol>

  <g class="g-ants">
    <use xlink:href="#s-text"
      class="text-copy"></use>
    <use xlink:href="#s-text"
      class="text-copy"></use>
    <use xlink:href="#s-text"
      class="text-copy"></use>
    <use xlink:href="#s-text"
      class="text-copy"></use>
    <use xlink:href="#s-text"
      class="text-copy"></use>
  </g>


</svg>

<div id='menu'>
<ul>
   <li class='active'><a href='#'><span>Home</span></a></li>
   <li><a href='#'><span>Profil</span></a></li>
   <li><a href='#'><span>Profil de l'artiste</span></a></li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>
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
        <a href="mailto:laszlo.sajkiewicz@gmail.com">contact me</a>
      </p>
    </footer>
    <div class="up">
<a href="#top"><img src="Data/top.png"/></a>
  </div>
  </body>
</html>
