<?php
require('dbconnection.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>View Records</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
    <script>
        function checkdelete(){
            return confirm('Are you sure you want to delete the Registration?');
        }
    </script> 
    <div class="form" style="width:100%">
     <button class="btn"><a href="registration.php"><i class="fa fa-plus"></i> New Reservation</a></button> 
    
    <h2>List of reservations:</h2>
    <table width="100%" border="2">
    <thead>
    <tr>
        <th><strong>S.No</strong></th>
        <th><strong>Accomodation</strong></th>
        <th colspan="3" align="center"><strong>Full Name</strong></th>
        <th colspan="3" align="center"><strong>Guests</strong></th>
        <th><strong></i> Email</strong></th>
        <th><strong>Phone</strong></th>
        <th><strong>CheckIn</strong></th>
        <th><strong>CheckOut</strong></th>
        <th><strong>Country</strong></th>
        <th><strong>State</strong></th>
        <th colspan="3" align="center"><strong>Actions</strong></th>
    </tr>
    </thead>
    <tbody>
        <?php
        $count=1;
        $sel_query="SELECT r.id, r.accomodation, r.initial,r.fnName, r.lsName, r.adguest, r.chguest, r.child, r.email,r.phone, r.checkin, r.checkout, r.equipment, r.requiredServices, r.slideout, r.pets, r.comments, c.cname, s.sname FROM registrations r  INNER JOIN country_tb c ON c.cid=r.country
        INNER JOIN state_tb s on s.sid = r.state ORDER BY s.sid ASC";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr><td align="center"><?php echo $count; ?></td>
            <td align="center"><?php echo $row["accomodation"]; ?></td>
            <td align="center"><?php echo $row["initial"]; ?></td>
            <td align="center"><?php echo $row["fnName"]; ?></td>
            <td align="center"><?php echo $row["lsName"]; ?></td>
            <td align="center"><?php echo $row["adguest"]; ?><?php echo " ,"; ?></td>
            <td align="center"><?php echo $row["chguest"]; ?><?php echo " ,"; ?></td>
            <td align="center"><?php echo $row["child"]; ?></td>
            <td align="center"><?php echo $row["email"]; ?></td>
            <td align="center"><?php echo $row["phone"]; ?></td>
            <td align="center"><?php echo $row["checkin"]; ?></td>
            <td align="center"><?php echo $row["checkout"]; ?></td>
            <td align="center"><?php echo  $row["cname"]; ?></td>
            <td align="center"><?php echo $row["sname"]; ?></td>
            <td align="center">
           
            <button class="btnview"><a href="view.php?id=<?php echo $row['id'];?>&accomodation=<?php echo $row["accomodation"]; ?>&initial=<?php echo $row["initial"]; ?>&fnName=<?php echo $row['fnName'];?>
            &lsName=<?php echo $row['lsName'];?>&adguest=<?php echo $row['adguest'];?>&chguest=<?php echo $row['chguest'];?>&child=<?php echo $row['child'];?>&email=<?php echo $row['email'];?>
            &phone=<?php echo $row['phone'];?>&checkin=<?php echo $row['checkin'];?>
            &checkout=<?php echo $row['checkout'];?>&cname=<?php echo $row['cname'];?>
            &sname=<?php echo $row['sname'];?>&equipment=<?php echo $row['equipment'];?>&slideout=<?php echo $row['slideout'];?>
            &requiredServices=<?php echo $row['requiredServices'];?>&pets=<?php echo $row['pets'];?>&comments=<?php echo $row['comments'];?>"><i class="fa fa-eye"></i> View</a></button>
     
            </td>
            <td align="center">
            <button class="btntd"><a href="editdatas.php?id=<?php echo $row["id"]; ?>&accomodation=<?php echo $row["accomodation"]; ?>&initial=<?php echo $row["initial"]; ?>&fnName=<?php echo $row['fnName'];?>
            &lsName=<?php echo $row['lsName'];?>&adguest=<?php echo $row['adguest'];?>&chguest=<?php echo $row['chguest'];?>&child=<?php echo $row['child'];?>&email=<?php echo $row['email'];?>
            &phone=<?php echo $row['phone'];?>&checkin=<?php echo $row['checkin'];?>
            &checkout=<?php echo $row['checkout'];?>&cname=<?php echo $row['cname'];?>
            &sname=<?php echo $row['sname'];?>&equipment=<?php echo $row['equipment'];?>&slideout=<?php echo $row['slideout'];?>
            &requiredServices=<?php echo $row['requiredServices'];?>&pets=<?php echo $row['pets'];?>&comments=<?php echo $row['comments'];?>"><i class="fa fa-edit"></i> Edit</a></button>
            </td>
            <td align="center">
            <button class="btndel"><a href="deleteData.php?id=<?php echo $row["id"]; ?>" onclick="return checkdelete()"><i class="fa fa-trash"></i> Delete</a></button>
            </td>
            </tr>
            <?php 
            $count++; 
        } ?>
    </tbody>
    </table>
    </div>
    </body>
</html>