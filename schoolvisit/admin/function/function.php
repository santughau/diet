<?php require_once('inc/db.php') ?>

<?php
    /*-------------------Function for Slider-----------------*/

/*--------------------End OF Slider-----------------------------------*/

/*--------------------Get Option List---------------------------------*/
function get_option_list($table,$col_id,$col_value){
  global $con;
    $get_option = "SELECT * FROM $table ORDER BY $col_value ASC";
    $run_option = mysqli_query($con,$get_option);
     while ($row_option = mysqli_fetch_array($run_option)){
		$option_id = $row_option[$col_id];
		$option_title = $row_option[$col_value];
		echo "<option value='$option_id'>$option_title</option>";
		
		}
   }
/* Use Of Get Slider
<?php echo get_option_list('categories','id','category');?>
*/
/*--------------------End OF Option List-------------------------------*/

/*--------------------Get Check Box List---------------------------------*/
function get_checkbox_list($table,$col_id,$col_value,$name){
  global $con;
    $get_checkbox = "SELECT * FROM $table ORDER BY $col_value ASC";
    $run_checkbox = mysqli_query($con,$get_checkbox);
     while ($row_checkbox = mysqli_fetch_array($run_checkbox)){
		$checkbox_id = $row_checkbox[$col_id];
		$checkbox_value = $row_checkbox[$col_value];
		
		echo "
        <div class='checkbox'>
            <label>
                <input type='checkbox'  value='$checkbox_id' name='$name' > $checkbox_value
            </label>
        </div>
        ";
		
		}
   }
/* 
---Inline Check Box---------------------
<label class='checkbox-inline'>
    <input type='checkbox'  value='$checkbox_id' name='$name'> $checkbox_value
</label>
---Inline Check Box--------------------
----------Use Of Get Checkbox----------
 <?php echo get_checkbox_list('users','id','first_name','course')?>
*/
/*--------------------End OF Check Box List-------------------------------*/
/*--------------------Get User IP Address-------------------------------*/

function getIp() {

    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

    }


    return $ip;

}
/*--------------------End Of User IP Address-------------------------------*/


    
?>


