<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>Tableau de bord</h1>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2>Utilisateur</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus">New User</i></a>
                    </div>
                    <!-- include fichier cnx en BDD -->
                    <?php
                    require_once "../php/config.php";


                    $sql = "SELECT * FROM mapremieretable";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo '<thead>';
                            echo '<tr>';

                            echo '<th>ID</th>';
                            echo '<th>Email</th>';
                            echo '<th>MDP</th>';
                            echo '<th>ROLES</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                echo '<td>' . $row["id"] . '</td>';
                                echo '<td>' . $row["email"] . '</td>';
                                echo '<td>' . $row["motDePasse"] . '</td>';
                                echo '<td>' . $row["role"] . '</td>';
                                echo '<td>';
                                echo '<a href ="read.php?id=' . $row["id"] .
                                    '"class="mr-3" title="vue" 
                            data-toggle="tooltip"><span class="fa 
                            fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>

                </div>
            </div>
        </div>
    </div>

</body>

</html>