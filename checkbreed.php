<?php
$dogBreeds = array(
    "Beagle",
    "Bulldog",
    "Poodle",
    "Labrador",
    "Boxer",
    "German Shepherd"
);

$q = "";
if (isset($_GET['q'])) {
    $q = trim($_GET['q']);
}

if ($q === "") {
    echo "Start typing a dog breed name...";
    exit;
}

$matches = array();

foreach ($dogBreeds as $breed) {
    if (stripos($breed, $q) === 0) {
        $matches[] = $breed;
    }
}

if (count($matches) > 0) {
    echo "Matching breed(s): " . implode(", ", $matches);
} else {
    echo "Dog breed cannot be found.";
}
?>