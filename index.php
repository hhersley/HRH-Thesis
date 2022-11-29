<?php require_once('header.php'); ?>

<body>
<h1> My honor's thesis </h1>
  <div class="row row-cols-lg-6">
  <?php
$servername = "localhost";
$username = "hahersle_homework3";
$password = "Hello10513!!";
$dbname = "hahersle_HRH-Thesis";
  
  
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "Select CountryID, CountryName, Flag from Country";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
    <div class="col">

     <div id="card" class="card"  style="width: 15rem; height: 30rem;">
         <img  src=<?=$row["Flag"]?> class="card-img-top" alt="...">

  <div  class="card-body">
    <a class="card-title" href="Country-Details.php?id=<?=$row["CountryID"]?>"><?=$row["CountryName"]?></a
  </div>
      </div>
  </div>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </card-group>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>

</body>
