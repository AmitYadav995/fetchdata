<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testingdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id:" . $row["id"]. " - name:" . $row["name"]. " " . $row["position"]. $row;
    // $data = [ 'id' => $row["id"], 'name' =>$row["name"],'position' =>$row["position"],];
    // header('Content-type: application/json');
    // echo json_encode( $data );
    $data[] = $row;

  }
  echo json_encode($data);

} else {
  echo "0 results";
}
$conn->close();
?>