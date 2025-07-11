<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.php">Hlavná stránka</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
<?php
    printMenuItem("minecraft.php", "Minecraft");
    printMenuItem("video.php", "Videá");
?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Rozprávky <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
<?php
    printMenuItem("rozpravky.php", "O drakoch");
?>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Hľadaj</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
function printMenuItem($url, $anchor) {
    if(basename($_SERVER["PHP_SELF"]) == basename($url)) {
       echo "<li class=\"active\"><a href=\"$url\">$anchor <span class=\"sr-only\">(current)</span></a></li>";
    } else {
       echo "<li><a href=\"$url\">$anchor</a></li>";
    }
}    
?>
