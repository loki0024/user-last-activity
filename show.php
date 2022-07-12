<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php 
  function show_data(){
$servername = "localhost";
$username = "root";
$password = "SunArc@123";
$db = "sunarc";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$id = $_GET['id'];
echo "<br>";
$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 20 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 echo $current_timestamp;
echo $id ."<br>";
$sql = "SELECT * FROM sunarc_table where username = 2424 OR username = 2425";
$result = mysqli_query($conn, $sql);
echo "<br>";
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
    echo $row["username"]. " " . $row["password"]. " " . $row["user_activity"] . " ";
    if($row["user_activity"] > $current_timestamp)
    {
      echo "<span style='padding=4px; background-color:green;color:white'>online</span>";
    }
    else {
      echo "<span style='padding=4px; background-color:red;color:white'>offline</span>";
    }
    echo "<br>";
  }
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}  
// sleep(3);

// show_data();
}
show_data();

?>

<?php
// function update_data()
// {
//   echo "updated";
// }
?>
<!-- 
<script type="text/javascript">
 setInterval(function(data){
user_last_activity(data);
 }, 5000);

function user_last_activity(){  $.ajax({
      type: "GET",
        // data: dataId,
        url: "update_last_activity.php",
      success: function(result){
      $("#put_data").html();
    }});
}
</script>
<div id="put_data"></div> -->