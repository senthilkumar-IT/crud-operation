<html>
    <head>
        <title> Display records</title>
        <style>
            .result,.result td, .result th{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 8px;
                margin: auto;
                background-color: lime;
            }
            .result th{
                background-color: magenta;
            }

        </style>
    </head>
    <body>
        <a href=" <?= base_url('register/employee') ?>">Go to Register</a>

        <?php
        if (isset($data)) {
           
            ?>
    <from action="<?=base_url('register/update')?>" method="post">
        <table cellspacing="20">
            <tr>
                <td>id</td>
                <td><input name="empid" value="<?=$data[0]->id?>" readonly="4"></td>
                
            </tr>
            <tr>
            <td>Name</td>
             <td><input name="empname" value="<?=$data[0]->employee_name?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input name="empemail" value="<?=$data[0]->employee_email?>"></td>
            </tr>
              <tr>
                <td>Mobile</td>
                <td><input name="empmobile" value="<?=$data[0]->employee_mobile?>"></td>
            </tr>
                   <tr>
                       <td><button>Update</button></td>
                <td></td>
            </tr>
        </table>
    </from>
            <?php
        }else{
            
        }
        ?>
        <table class="result">
            <tr>
                <th>Action</th>
                <th>id</th>
                <th>name</th>
                <th>Email</th>
                <th>mobile</th>

            </tr>
            <?php
            if (isset($table)) {
                foreach ($table as $row) {
                    ?>
                    <tr>
                        <td><a href="<?= base_url('register/edit/' . $row->id) ?>">Edit</a></td>

                        <td><?= $row->id ?></td>
                        <td><?= $row->employee_name ?></td>
                        <td><?= $row->employee_email ?></td>
                        <td><?= $row->employee_mobile ?></td>

                    </tr>

                    <?php
                }
            }
            ?>
        </table>      
    </body>
</html>

