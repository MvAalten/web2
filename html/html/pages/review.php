<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include('../includes/nav.php')

    ?>
        <section class="form-section">
            <h2>Review our services</h2>
            <form class="form-column" action='push_reviews.php' name='push_reviews.php' method="post">
                    <label> Review: </label>
                    <br>
                    <input type="text" name="name" placeholder="naam" >
                    <input class="big-box-for-reviews" type="text" name="review" placeholder="Review" required>
                    <input type="submit" value="Upload">
                </form>
        </section>

        <section class="form-section">
            <h2>Reviews</h2>
            <?php 
            $sql = "SELECT * FROM reviews";
            $stmt = $connection->query($sql);

            while($reviews = $stmt->fetch()){
                echo "
                <tr class='reviews'>
                    <td>$reviews[name]</td>
                    <td>$reviews[review]</td>
                    <td>"
            ;}
            
            ?>
        </section>
</body>
</html>

