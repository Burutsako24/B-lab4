<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ces";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT * from student";
$result = $conn->query($sql);
//var_dump($result);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "STDID: " . $row["STDID"]. " - Name: " . $row["FNAME"]. " " . $row["LNAME"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "SELECT * from major";
$result = $conn->query($sql);
//var_dump($result);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "MID: " . $row["MID"]. " - Name: " . $row["Name"]. " " . $row["SchoolID"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "SELECT * from school";
$result = $conn->query($sql);
//var_dump($result);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "SID: " . $row["SID"]. " - Name: " . $row["Name"]. " " . $row["TelNo"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "SELECT * from student_has_subject";
$result = $conn->query($sql);
//var_dump($result);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "StudentID: " . $row["StudentID"]. " - Name: " . $row["SubjectID"]. " " . $row["Grade"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "SELECT * from subjeet";
$result = $conn->query($sql);
//var_dump($result);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "SUBID: " . $row["SUBID"]. " - Name: " . $row["NAME"]. " " . $row["Unit"]. "<br>";
  }
} else {
  echo "0 results";
}
 



?>