<?php
    // 1. Establish connection
    $a = mysqli_connect("localhost", "root", "", "table");

    // Check connection to avoid invisible errors
    if (!$a) {
        die("Connection failed: " . mysqli_connect_error());
    }
	

    $sql = "SELECT * FROM deta";
    $data = mysqli_query($a, $sql);
?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // 2. Fetch and loop through data
            while($row = mysqli_fetch_assoc($data)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>