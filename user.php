<?php 

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
user_data();
 setInterval(function(data){
    user_data();
user_last_activity();
 }, 5000);

function user_last_activity(){  $.ajax({
      type: "GET",
        // data: dataId,
        url: "update_last_activity.php",
      success: function(result){
      $("#get_data").html(result);
    }});
}
function user_data(){  $.ajax({
      type: "GET",
        // data: dataId,
        url: "show.php",
      success: function(result){
      $("#put_data").html(result);
    }});
}
</script>
<div id="get_data"></div>
<div id="put_data"></div>