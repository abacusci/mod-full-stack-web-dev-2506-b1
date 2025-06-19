<?php
// This line starts the PHP script. All the code after <?php is processed by the PHP engine.

// Load the helper file that contains the function for sending HTTP responses in JSON format.
// __DIR__ is a special constant that returns the full path of the current directory.
// We go one directory up (..) and access the file located at /src/functions/http.php.
require __DIR__ . '/../src/functions/http.php';

// Get the 'e' parameter from the URL query string (e.g., script.php?e=users).
// This parameter tells us which API endpoint the user wants to access.
$endpoint = $_GET['e'];

// Security measure: remove dangerous characters from the input.
// This prevents directory traversal attacks or access to unintended files.
// Characters removed: '.', '/' and '\' which could alter the path structure.
$endpoint = str_replace(['.', '/', "\\"], '', $endpoint);

// Build the full path to the endpoint file.
// The file should be located in /src/api/ and have the name specified in the 'e' parameter (e.g., 'users' becomes users.php).
$endpointPath = __DIR__ . "/../src/api/{$endpoint}.php";

// Check if the requested endpoint file actually exists.
// If it doesn't exist, we send a 404 Not Found error with a message in JSON format.
if (!file_exists($endpointPath)) {
	http_send_json(['message' => 'Not found'], 404); // Send JSON error response with HTTP 404 code
	exit; // Stop further execution of the script
}

// Include the endpoint file. It must return a function that we can execute.
// The 'require' statement runs the file and assigns the returned value (a function) to $endpointFunction.
$endpointFunction = require($endpointPath);

// Call the function returned by the endpoint file.
// This function should return an array or object representing the data to be sent back to the client.
$response = $endpointFunction();

// Send the result as a JSON response using the helper function.
// This typically sets the correct headers and converts the data to JSON format.
http_send_json($response);
