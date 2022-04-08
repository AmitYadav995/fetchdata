<?php
$name = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender']
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone= $_POST['phone'];


if(!empty($username))|| (!empty($password))  (!empty($gender))|| (!empty($email))|| (!empty($phoneCode))||
|| !empty($phone) )
 {
$host="localhost"
$dbUsername="root";
$dbPassword=" ";
$dbname="testingdb"

$conn =new mysqli($host .$dbUSername,$dbpassword,$dbname);
if(mysqli_connect_error()){
   die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error())
}
else{
    $SELECT ="SELECT  email from register where email = ? Limit 1";
    $INSERT ="INSERT into reister (username ,password ,gender ,email, phoneCode ,phone) values (?,?,?,?,?,?)";


    $stmt =$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;

    if($rnum==0){
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssssil",$username,$password,$gender,$email,$phoneCode,$phone)
        $stmt->execute();
        echo "New record inserted successdully";
    }
    else{
        echo"someone already register using this emamil";

    }

} 
 }
else
{
    echo"All field are required";
    die();
}
 }

?>
