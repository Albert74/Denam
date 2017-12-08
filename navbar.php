<?php
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery =$db->query($sql);
?>




<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <a href="inde.php" class="navbar-brand">DENAM </a>
    <ul class="nav navbar-nav">
      <?php while($parent = mysqli_fetch_assoc($pquery)); ?>
      <?php
      $parent_id = $parent ['id'];
      $sql2 = "SELECT * FROM categories WHERE parent = ''$parent_id'";
      $cquery = $db->query($spl2);
       ?>


      <li class="dropdown">
        <a href="#" class="dropdonw-toggle" data-toggle="dropdown"> <?php echo $parent['category']; ?> <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Men</a></li>
          <?php while($child = mysqli_fetch_assoc($query)); ?>
          <li><a href="#"> <?php echo $child['category']; ?> </a></li>
        <?php endwhile; ?>
      </ul>
    </li>
     <?php endwhile; ?>
  </div>
</nav>
