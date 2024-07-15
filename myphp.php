<?php

$checkin=$_POST['checkin_date'];
$checkout = $_POST['checkout_date'];
$name=$_POST['name'];
$email1 =$_POST['email1'];
$room_type = $_POST['room_type'];

if(isset($_POST['submit']))
{
    $con=mysqli_connect("localhost","root","","hotel");
if($con)
{
    echo " Data Connection Was Done";

}
else{
    echo "connection failed".mysqli_connect_error();
}

$query = "use hotel;";
$result = mysqli_query($con,$query);
if($result)
{
    echo "yes"."<br>";
}
else{
    echo "no";
}

$usertable = "CREATE TABLE BOOKED_ROOMS(checkin varchar(25),checkout varchar(25),names varchar(20),email varchar(30),room_type varchar(30));";

$result1 = mysqli_query($con,$usertable);

if($result1){
    echo "table created";

}
else{
    echo "table not created";
}

$insert_details = "INSERT INTO BOOKED_ROOMS (checkin,checkout,names,email,room_type)values('$checkin','$checkout','$name','$email1','$room_type');";

$result2 = mysqli_query($con,$insert_details);

if($result2){
    echo "inserted";
}
else{
    echo "not inserted";
}





}
?>

<script>

    alert("your room is booked!!!");

</script>


