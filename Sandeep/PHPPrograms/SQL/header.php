<?php require_once "header.php"; ?>
<html>
<body>
<div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=student-add"><img src="web/image/icon-add.png" />Add Student</a>
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th><strong>Name</strong></th>
                    <th><strong>Address</strong></th>
                    <th><strong>Zipcode</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Action</strong></th>

                </tr>
            </thead>
            <tbody>
                    <?php
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
          <tr>
                    <td><?php echo $result[$k]["username"]; ?></td>
                    <td><?php echo $result[$k]["address"]; ?></td>
                    <td><?php echo $result[$k]["zip"]; ?></td>
                    <td><?php echo $result[$k]["email"]; ?></td>
                    <td><a class="btnEditAction"
                        href="index.php?action=student-edit&id=<?php echo $result[$k]["id"]; ?>">
                        <img src="icon-edit.png" />
                        </a>
                        <a class="btnDeleteAction" 
                        href="index.php?action=student-delete&id=<?php echo $result[$k]["id"]; ?>">
                        <img src="icon-delete.png" />
                        </a>
                    </td>
                </tr>
                    <?php
                        }
                    }
                    ?>
                
            
            
            <tbody>
        
        </table>
    </div>


</body>
</html>
