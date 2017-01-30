<?php
  include("admin/databas.php");
?>
<section class="maincv">
<article class="cv-content">

<?php
$query = " 
SELECT * FROM cv
ORDER BY id;
";
$result = mysqli_query($db, $query); 

while($row = mysqli_fetch_assoc($result)){
  $name = $row['name']; 
  $text = $row['text']; 
  echo "<h1>$name</h1> <p>$text</p>";
}
?>
</article>
</section>