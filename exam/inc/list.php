<h5 class="bg-warning text-center">विद्यार्थीचे प्रगती </h5>
<table class="table table-bordered table-condensed ">
    <thead class="thead-dark">
        <tr>
            <th>Sr</th>
            <th>विद्यार्थीचे नाव</th>
            <th>जिल्हा </th>
            <th>तालुका </th>
            <th>शाळेचे नाव</th>
            <th>वर्ग </th>
            <th>विषय </th>
            <th> गुण %</th>
            <th> दिनांक </th>
        </tr>
    </thead>
    <?php
        $get_result = "SELECT * FROM registration ORDER BY id DESC";
        $run_result = mysqli_query($con,$get_result);
        $sr = 0;
        while($row_result=mysqli_fetch_array($run_result)){
        $result_id = $row_result['id'];
        $name = $row_result['name'];
        $address = $row_result['address'];
        $marks = $row_result['marks'];
        $date = $row_result['date'];
        $class = $row_result['class'];
        $subject = $row_result['subject'];
        $district = $row_result['district'];
        $taluka = $row_result['taluka'];
            
        $get_dist = "SELECT * FROM district WHERE id = '$district' ";
        $run_dist = mysqli_query($con,$get_dist);
        $row_dist=mysqli_fetch_array($run_dist);
        $dist_name = $row_dist['dist_name'];
            $sr++;
        ?>
    <tr>
        <td><?php echo $sr;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $dist_name;?></td>
        <td><?php echo $taluka;?></td>
        <td><?php echo $address;?></td>
        <td><?php echo $class;?></td>
        <td><?php echo $subject;?></td>
        <td><?php echo $marks;?></td>
        <td><?php echo $date;?></td>
    </tr>
    <?php } ?>
</table>
