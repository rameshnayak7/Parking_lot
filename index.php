<!DOCTYPE html>
<?php
  require_once('config.php');
  
?>
<html>
	<head>
		<title> Slots </title>
		<link rel="stylesheet" href="buttonstyle.css"/>
		
	</head>

	<body>
	<form method="POST">
<?php
    $sql= "SELECT name FROM buttons";
    $result = mysqli_query($connection,$sql);
   while($row = mysqli_fetch_array($result))
   {
	   $var[]= $row['name'];
   }

   $query1="SELECT status FROM buttons";
   $result1=mysqli_query($connection,$query1);
   while($row=mysqli_fetch_array($result1))
   {
   	$var1[]=$row['status'];
   }
?>
<div>
<br>Please select the number of slots:
<select name="limit1" id="limit1" onchange='load_new_content()'>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>

<div class="div1">
  <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A1" id="button1" value="1"><span><?php echo $var[0]?></span>
	 </label>
   </div>
  <div id="ck-button">
	 <label>
		<input type="checkbox" class="button" name="A2" id="button2" value="1"><span><?php echo $var[1]?></span>
     </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A3" id="button3" value="1"><span><?php echo $var[2]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A4" id="button4" value="1"><span><?php echo $var[3]?></span>
	 </label>
   </div>      
    <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A5" id="button5" value="1"><span><?php echo $var[4]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A6" id="button6" value="1"><span><?php echo $var[5]?></span>
	 </label>
   </div>
   </div>


	<div class="verticaltext">EXIT</div>
	<div class="div2">
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button"><span><?php echo $var[5]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" ><span><?php echo $var[5]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button"><span><?php echo $var[5]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button"><span><?php echo $var[5]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button"><span><?php echo $var[5]?></span>
	 </label>
   </div>

   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button"><span><?php echo $var[5]?></span>
	 </label>
   </div>               
	</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script type="text/javascript">

$(document).ready(function(){
	$("#button").click(function(){
    $.ajax({
            url: "updater.php", //where your want to send this request(the php file location)
            type: "POST",
            data: {status: 0},
            success: function(){
                    //alert('Success');
                }
       });
    });
});-->
</script>

<script type="text/javascript">
var val="<?php echo $var1[0] ?>";
/*var ids = new Array(7);
for(var i=0; i<6; i++)
   {ids[i] = "<?php echo $var1[0] ?>"
	document.write(ids[i]);
}*/
if(val==1)
{    //document.getElementById("button1").setAttribute("type", "button disabled");
	 $('#button1').prop('disabled', true);

}
var val2="<?php echo $var1[1] ?>";
if(val2==1)
{
	 $('#button2').prop('disabled', true);
}
var val3="<?php echo $var1[2] ?>";
if(val3==1)
{
	 $('#button3').prop('disabled', true);
}
var val4="<?php echo $var1[3] ?>";
if(val4==1)
{
	 $('#button4').prop('disabled', true);
}
var val5="<?php echo $var1[4] ?>";
if(val5==1)
{
	 $('#button5').prop('disabled', true);
}
var val6="<?php echo $var1[5] ?>";
if(val6==1)
{
	 $('#button6').prop('disabled', true);
}
</script>
<input type="submit" name="submit" value="Proceed" class="submit">
<script type="text/javascript">

/*function load_new_content(){
     var selected_option_value=$("#limit1 option:selected").val(); //get the value of the current selected option.

     $.post("example.php", {option_value: selected_option_value},
         function(data){ //this will be executed once the `script_that_receives_value.php` ends its execution, `data` contains everything said script echoed.
         }
     );
     return data;
} 

var limit=$("#limit1 option:selected").val();
document.write(x);*/
var lim=1;
$(document).ready(function(){
	$("select[name='limit1']").on('change',function(e){
		lim= $(this).val();
	})
});	

$('input[type=checkbox]').on('change', function(evt) {
   if($('input[type=checkbox]:checked').length > lim) {
       $(this).prop('checked', false);
   }
});

</script>
	</form>

<?php
if(isset($_POST['submit'])&&isset($_POST['A1']))
{
	$query2="UPDATE buttons SET status=1 where status=0 and name='A1'";
	$result2=mysqli_query($connection,$query2);
}
if(isset($_POST['submit'])&&isset($_POST['A2']))
{
	$query3="UPDATE buttons SET status=1 where status=0 and name='A2'";
	$result2=mysqli_query($connection,$query3);

}
if(isset($_POST['submit'])&&isset($_POST['A3']))
{
	$query4="UPDATE buttons SET status=1 where status=0 and name='A3'";
	$result2=mysqli_query($connection,$query4);

}
if(isset($_POST['submit'])&&isset($_POST['A4']))
{
	$query5="UPDATE buttons SET status=1 where status=0 and name='A4'";
	$result2=mysqli_query($connection,$query5);

}
if(isset($_POST['submit'])&&isset($_POST['A5']))
{
	$query6="UPDATE buttons SET status=1 where status=0 and name='A5'";
	$result2=mysqli_query($connection,$query6);

}
if(isset($_POST['submit'])&&isset($_POST['A6']))
{
	$query7="UPDATE buttons SET status=1 where status=0 and name='A6'";
	$result2=mysqli_query($connection,$query7);

}
?>

	</body>
</html>

