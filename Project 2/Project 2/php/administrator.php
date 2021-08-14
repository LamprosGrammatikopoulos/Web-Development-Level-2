<?php
	include_once 'connection.php';
    $result = mysqli_query($con,"SELECT * FROM users;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale-1.0">
   <title>index</title>
   <link rel="stylesheet" type="text/css" href="../styles/administrator.css" />
   <link rel="stylesheet" type="text/css" href="../styles/navbar.css" />
   <script type="text/javascript" src="../scripts/quiz.js"></script>
   <link rel="stylesheet" type="text/css" href="../styles/popup_style.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>   <!--Profile Icon-->
   <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
                    $(function(){
                            $("#nav-placeholder").load("../navbar2.php");
                    });
    </script>
</head>
<body>

    <!--===================================NavBar================================-->
    <div id="nav-placeholder">

    </div>
    <!--===================================Main================================-->
        <div class="col-12 col-s-12 row">
            <article>
            <table >
                       <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Sex</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Email</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Role</th>
                            </tr>
                        </thead> 
                        <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td data-label="Name"><?php echo $row["name"]; ?></td>
                            <td data-label="Last Name"><?php echo $row["lastname"]; ?></td>
                            <td data-label="Date"><?php echo $row["date"]; ?></td>
                            <td data-label="Sex"><?php echo $row["sex"]; ?></td>
                            <td data-label="Username"><?php echo $row["username"]; ?></td>
                            <td data-label="Password"><?php echo $row["password"]; ?></td>
                            <td data-label="Email"><?php echo $row["email"]; ?></td>
                            <td data-label="Photo"><?php echo $row["photo"]; ?></td>
                            <td data-label="Role"><?php echo $row["role"]; ?></td>
                            <?php
                                if($row["role"] != "admin") {
                            ?>
                                    <td class="PromoteButton"><a href="promote-user.php?username=<?php echo $row["username"]; ?>">Promote</a></td> <!-- class="PromoteButton" -->
                                    <td class="DemoteButton"><a href="demote-user.php?username=<?php echo $row["username"]; ?>">Demote</a></td> <!-- class="DemoteButton" -->
                                    <td class="DeleteButton"><a href="delete-user.php?username=<?php echo $row["username"]; ?>">Delete</a></td><!--class="DeleteButton"-->
                            <?php
                                }
                            ?>
                        </tr>
                        <?php
                            $i++;
                            }
                        ?>
                    </table>
            </article>
        </div>

    </body>
</html>
