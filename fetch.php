<?php

include("conn.php");

    $tableName = $_POST['table'];
    
    if($tableName == 'all')
    {
        $i=1;
        $get_data_hr = "select * from hr";
        $get_data_sales = "select * from sales";
        $get_data_manager = "select * from manager";

        $run_data_hr = mysqli_query($db, $get_data_hr);
        $run_data_sales = mysqli_query($db, $get_data_sales);
        $run_data_manager = mysqli_query($db, $get_data_manager);

        if(mysqli_num_rows($run_data_hr)>0){
            
            while($result = mysqli_fetch_array($run_data_hr)){
            ?>

            <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['salary']; ?></td>
            <td><?php echo $result['profession']; ?></td>
            </tr>
            <?php
            }
        
    }
    if(mysqli_num_rows($run_data_sales)>0){
            
        while($results = mysqli_fetch_array($run_data_sales)){
        ?>

        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $results['name']; ?></td>
        <td><?php echo $results['salary']; ?></td>
        <td><?php echo $results['profession']; ?></td>
        </tr>
        <?php
        }
    
}
if(mysqli_num_rows($run_data_manager)>0){
            
    while($resul = mysqli_fetch_array($run_data_manager)){
    ?>

    <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $resul['name']; ?></td>
    <td><?php echo $resul['salary']; ?></td>
    <td><?php echo $resul['profession']; ?></td>
    </tr>
    <?php
    }

}
    }
    else{

        $get_data = "select * from $tableName";

        $run_data = mysqli_query($db, $get_data);

        if(mysqli_num_rows($run_data)>0){
            
            while($result = mysqli_fetch_array($run_data)){
            ?>

            <tr>
            <td><?php echo $result['id']; ?></td>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['salary']; ?></td>
            <td><?php echo $result['profession']; ?></td>
            </tr>


<?php
        }

    }
}  
?>