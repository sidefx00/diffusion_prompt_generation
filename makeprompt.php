<?php
// Check if the correct number of arguments were provided
if ($argc < 3) {
    echo "Usage: php script.php <text_file> [argument1] [argument2] ...\n";
    exit(1);
}

// Load the text file into a string
$text = file_get_contents($argv[1]);

// Split the text into an array of lines
$lines = explode("\n", $text);

// Loop through each command-line argument and replace % with its corresponding argument for each line
for ($i = 2; $i < $argc; $i++) {
    foreach ($lines as $line) {
        $line = str_replace('%', $argv[$i], $line);
        // Echo the modified line
        if ($line != '') {
                echo $line;
                echo "\n";
        }
    }
    // Add a newline character between each loop
}
