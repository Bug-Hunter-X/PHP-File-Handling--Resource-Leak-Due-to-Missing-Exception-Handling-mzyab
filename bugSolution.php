```php
$file = fopen("path/to/file.txt", "r");
try {
if ($file) {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line
        // Example: Handle potential errors within this loop
        if (strpos($line, 'error') !== false){
            throw new Exception("Error encountered in file.");
        }
    }
    fclose($file);
} else {
    throw new Exception("Error opening file.");
}
} catch (Exception $e) {
    // Handle errors
    if (isset($file)) {
        fclose($file); // Ensure file is closed even on error
    }
    echo "Error: " . $e->getMessage();
}
```