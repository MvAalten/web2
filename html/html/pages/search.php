<!-- work in progress -->

<table id='product_restult'>
    <tr>
        <th>id</th>
        <th>email</th>
        <th>details</th>
        <th>delete</th>
        <th>update</th>
    </tr>

    <?php foreach($result as $row); ?>
        <tr class='products'>
            <td><?php echo $row['id']; ?><td>
            <td><?php echo $row['email']; ?><td>
            <td><a href='userdetail.php?id=<?php echo $row['id']; ?>'>details</a><td>
            <td><a href='user_delete.php?id=<?php echo $row['id']; ?>'>details</a><td>
            <td><a href='user_delete.php?id=<?php echo $row['id']; ?>'>details</a><td>
        <tr>
    <?php endforeach; ?>