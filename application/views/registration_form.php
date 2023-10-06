<html>
    <head>
        <title> Registration</title>
    </head>
    <body>
        <?php
        if(isset($status)){
            echo $status;
            echo ' br'. $quenty;
        }
        if(isset($msg)){
            echo '<h2>'.$msg.'<h2>';
        }
        ?>
       
        <form action="<?=base_url('register/savedata/')?>" method="post">
            <table cellspacing="20">
                <tr>
                      <td>Name</td>
                      <td><input type ="text" name="empname"</td>
                </tr>
                <tr>
                    <td>Email</td>
                      <td><input type="email" name="empmail"</td>.
                </tr>
                <tr>
                      <td>Mobile</td>
                      <td><input type="number" name="empmobile"</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Register">
                        <a href="<?=base_url('register/fetchdata')?>">View Record</a>
                               
                    </td>
                </tr>
            </table>
        </form>
       
    </body>
    
</html>


