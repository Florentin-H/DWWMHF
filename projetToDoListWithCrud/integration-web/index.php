<?php
// Include config file
require_once "../php/config.php";

// Define variables and initialize with empty values
$tache = "";
$tache_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $input_tache = trim($_POST["tache"]);
    if (empty($input_tache)) {
        $tache_err = "Please enter an tache.";
    } else {
        $tache = $input_tache;
    }





    // Check input errors before inserting in database
    if (empty($tache_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO todolist (tache) VALUES (?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_tache);

            // Set parameters
            $param_tache = $tache;


            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>To Fait Quoi Today</title>

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
</head>

<!-- body aura un fond bleu dégradé vers le blanc en diagonale vers le bas gauche -->

<body>
    <!-- main sera blanc et contiendra les éléments d'ajouts dans le top. 
    la section corps contiendra les tâches ainsi que le bouton poubelle et la case valide
    la section bottom contiendra le nombre de tâches restantes à valider + un bouton pour supprimer toutes les tâches -->
    <main>
        <div class="top">
            <h1>To Fait Quoi Today?</h1>


        </div>
        <div class="containerDePasseAction-effaceTout">
            <!--grand container dans le main qui permet d'agencer tout le bloc de la div passe à l'action au bouton efface tout-->
            <div class="ajoutTache">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Passe à l'action</label>
                        <input type="text" name="tache" class="form-control <?php echo (!empty($tache_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tache; ?>">
                        <input type="submit" name="submit" class="go" value="Go" />

                        <span class="invalid-feedback"><?php echo $tache_err; ?></span>
                    </div>
                    <!--permet d'écrire ce que l'on veut mettre dans la TodoList (non fonctionnel au 27/10/2022)-->

                    <div class="wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">




                </form>
            </div>
        </div>
        </div>
        </div>
        </form>
        </div>

        <section class="corps">
            <?php
            require_once "../php/config.php";


            $sql = "SELECT * FROM todolist";
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table table-bordered table-striped">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>tache</th>';
                    echo '<th>update</th>';
                    echo '<th>delete</th>';

                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';

                        echo '<td>' . $row["tache"] . '</td>';

                        echo '<td>';
                        echo '<a href ="read.php?id=' . $row["id"] .
                            '"class="mr-3" title="vue" 
              data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
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
                    echo '<div class="alert alert-danger"><em>Aucune tache en cours actuellement .</em></div>';
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close connection
            mysqli_close($link);
            ?>





            </div>
            <div class="bottom">
                <!--permet de gérer le bas de page, à gauche le nombre de tache encore à valider à droite le bouton rouge efface tout-->
                <p>Bouges toi t'as <span> "X" </span> tâches en attente!</p>
                <!--le span permettra d'actualiser le nombre d'action à restante à valider-->
                <?php
                // Process delete operation after confirmation
                if (isset($_POST["delete"]) && !empty($_POST["delete"])) {
                    // Include config file
                    require_once "../php/config.php";


                    // Prepare a delete statement
                    $sql = "DELETE FROM todolist ";

                    if ($stmt = mysqli_prepare($link, $sql)) {
                        // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt, "i", $param_id);

                        // Set parameters
                        $param_id = trim($_POST["delete"]);

                        // Attempt to execute the prepared statement
                        if (mysqli_stmt_execute($stmt)) {
                            // Records deleted successfully. Redirect to landing page
                            header("location: index.php ");
                            exit();
                        } else {
                            echo "Oops! Something went wrong. Please try again later.";
                        }
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);

                    // Close connection
                    mysqli_close($link);
                    // } else {
                    //     // Check existence of id parameter
                    //     if (empty(trim($_GET["id"]))) {
                    //         // URL doesn't contain id parameter. Redirect to error page
                    //         header("location: index.php");
                    //         exit();
                    //     }
                }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="alert alert-danger">

                        <input type="submit" name="delete" class="delete" value="effaceTout!" />
                    </div>
            </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>