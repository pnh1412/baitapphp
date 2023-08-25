<?php
 
$CSVvar = fopen("data.csv", "r");
if ($CSVvar !== FALSE) {
?>
    <html>
    <head>
        <style>
            table,th,td {
                border: 1px solid black;
            }
        </style>
    </head>
    <div>
        <table style="border:1px solid black">
            <thead>
                <tr>
                    <th><b>ID</b></th>
                    <th><b>Brand Name</b></th>     
                    <th><b>Register</b></th>
                    <th><b>Time</b></th>
                    <th><b>Enterprise</b></th>

                </tr>
            </thead>
<?php
    while (! feof($CSVvar)) {
        $data = fgetcsv($CSVvar, 1000, ",");
        if (! empty($data)) {
            ?>
            <tr>
                <td><?php echo $data[0];  ?></td>
                <td><div><?php echo $data[1]; ?></div></td>
                <td><div> <?php echo $data[2]?></td>
                <td><div> <?php echo $data[3]?></td>
                <td><div> <?php echo $data[4]?></td>
            </tr>
 <?php }?>
<?php
    }
    ?>
        </table>
    </div>
    </html>
<?php
}
fclose($CSVvar);
?>
