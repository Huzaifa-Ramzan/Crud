<?php
include 'header.php';
?>
<div class="container">
    <h2>All Records</h2>
    <?php 
     $con=mysqli_connect('localhost','root','','crud_1');
     $sql='select * from student join class on class=class_id';
     $result=mysqli_query($con,$sql);
     if(mysqli_fetch_assoc($result)>0){
     ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while($row=mysqli_num_rows($result)){
            ?>
            <tr>
                <td><?php echo $row['student_id'];?></td>
                <td><?php echo $row['student_name'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['programs'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td>
                    <a href='edit.php?id='>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }?>
</div>
</div>
</body>
</html>
