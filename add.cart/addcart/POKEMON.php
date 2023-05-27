<?php 

if (isset($_GET['pokemon_name'])) {
    $pokemonName = $_GET['pokemon_name'];

    // Send API request to retrieve Pokémon data
    $apiUrl = "https://pokeapi.co/api/v2/pokemon/{$pokemonName}";
    $pokemonData = file_get_contents($apiUrl);
    $pokemonData = json_decode($pokemonData, true);

    if ($pokemonData) {
        $pokemonName = $pokemonData['name'];
        $pokemonImage = $pokemonData['sprites']['front_default'];
        $pokemonInfo = "Height: {$pokemonData['height']} | Weight: {$pokemonData['weight']}";

        // Display Pokémon card
        echo '<div class="pokemon_card">';
        echo '<img src="' . $pokemonImage . '" alt="' . $pokemonName . '">';
        echo '<h3>' . ucfirst($pokemonName) . '</h3>';
        echo '<p>' . $pokemonInfo . '</p>';
        echo '</div>';
    } else {
        echo '<p>No Pokémon found with the given name.</p>';
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Pokémon Search</title>
    <style>
    .pokemon_card {
        display: inline-block;
        text-align: center;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .pokemon_card img {
        width: 150px;
        height: 150px;
    }
</style>
</head>
<body>
    <h1>Pokémon Search</h1>
    <form method="GET" action="">
        <input type="text" name="pokemon_name" placeholder="Enter Pokémon Name">
        <button type="submit">Search</button>
    </form>
    <div id="pokemon_results">
        <!-- Search results will be displayed here -->
    </div>
</body>
</html>