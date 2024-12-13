<?php
error_reporting(E_ALL);
ini_set('display_error', 1);
ini_set('display_startup_errors', 1);

require_once 'includes/database.php';

// Check if an ID is provided in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "No recipe ID provided.";
    exit;
}

$recipe_id = intval($_GET['id']); // Ensure the ID is an integer

// Prepare and execute a SQL query to fetch recipe details
$statement = $connection->prepare('SELECT * FROM recipes WHERE id = ?');
$statement->bind_param('i', $recipe_id);
$statement->execute();

$recipe = $statement->get_result()->fetch_assoc();

// Check if the recipe exists
if (!$recipe) {
    echo "Recipe not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/recipe-info.css">
    <!--<a href="https://www.flaticon.com/free-icons/clock" title="clock icons">Clock icons created by dmitri13 - Flaticon</a>-->

    <title><?php echo $recipe['title']; ?> - Recipe Information</title>
</head>

<body>

<!-- Navigation -->
<div class="hero">
    <div class="hero-text">
        <a href="index.php">
        <li class = "logo"> 
        <a href="index.php"> <img src = "images/cozybites-logo.png" alt= Logo> </a> 
        </li>
        </a>
    </div>
    <div class="casestudy">
        <button onclick="window.location.href='casestudy.php';">Casestudy</button>    
    </div>
    <div class="help">
        <button onclick="window.location.href='help.php';">Help</button>    
    </div>
</div>


<section class="banner">
    <!-- Recipe Image Section -->
    <div class="banner-img">
        <!-- Recipe Image -->
        <img src="pics/<?php echo $recipe['main_image']; ?>" alt="Recipe Image" class="recipe-image">
    </div>

    <div class="banner-text">
        <!-- Recipe Title -->
        <h1><?php echo $recipe['title']; ?></h1>
        <h2><?php echo $recipe['subtitle']; ?></h2>
        
        <!-- Recipe Information -->
        <section class="recipe-info-container"> 
        <ul>
            <li> 
                <img class="recipe-icon" src = "images/time.png" alt= clock>
                <p class ="recipe-info"><strong>Cooking Time:</strong> <?php echo $recipe['cook_time']; ?></p>
            </li>
            <li>
                <img class="recipe-icon" src = "images/serving.png" alt= serving>
                <p class ="recipe-info"><strong>Serving Size:</strong> <?php echo $recipe['serving_size']; ?></p>
            </li>
            <li>
                <img class="recipe-icon" src = "images/protein.png" alt= protein>
                <p class ="recipe-info"><strong>Protein:</strong> <?php echo $recipe['protein']; ?></p>
            </li>
            <li>
                <img class="recipe-icon" src = "images/calories.png" alt= calories>
                <p class ="recipe-info"><strong>Calories:</strong> <?php echo $recipe['calories']; ?></p>
            </li>
        </ul>
    <!-- Recipe Description -->
    <p><strong>Description:</strong> <?php echo $recipe['description']; ?></p>
    </div>
</section>

    <!-- Ingredients Section -->
    <section class="ingredients">
        <div class = "ingredients-img">
            <img src="pics/<?php echo $recipe['ingredients_image']; ?>" alt="Ingredient image" class="ingredient-image">
        </div>
        <div class="ingredients-text">
            <h2>Ingredients</h2>
            <ul>
                <?php
                $ingredients = explode('*', $recipe['ingredients']);
                foreach ($ingredients as $ingredient) {
                echo '<li>' . $ingredient . '</li>';
                }
                ?>
            </ul>
        </div>
    </section>

    <!-- Steps List -->
    <h2>Steps</h2>
    <div class="steps-container">
        <?php
        $steps = explode('*', $recipe['steps']);
        $images = explode('*', $recipe['steps_image']);

        foreach ($steps as $index => $step) {
            $stepParts = explode('^^', $step);

            if (count($stepParts) == 2) {
                echo '<div class="step">';
                // Display step number next to the title
                echo '<strong>' . trim($stepParts[0]) . ' (' . ($index + 1) . '):</strong> ';
                echo '<p>' . trim($stepParts[1]) . '</p>';

                // Display the step image if available
                if (isset($images[$index])) {
                    // Ensure that the image URL is valid
                    echo '<img src="pics/' . $images[$index] . '" alt="Step ' . ($index + 1) . ' Image" class="step-image">';
                }

                echo '</div>';
            }
        }
        ?>
    </div>
</div>
</body>
</html>