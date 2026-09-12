<?php
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('resources/views'));
$strings = [];

foreach ($files as $file) {
    if ($file->getExtension() === 'php') {
        $content = file_get_contents($file->getRealPath());
        // Match text between > and <
        preg_match_all('/>([^<]+)</', $content, $matches);
        foreach ($matches[1] as $match) {
            // Clean up whitespace but keep internal spaces
            $text = trim(preg_replace('/\s+/', ' ', $match));
            // Filter out empty, blade directives, blade echos
            if (
                strlen($text) > 1 && 
                !preg_match('/^{{.*}}$/', $text) && 
                !preg_match('/^{!!.*!!}$/', $text) && 
                !preg_match('/^@/', $text) &&
                !preg_match('/^[A-Za-z0-9\-_]+$/', $text) // Filter out pure single words that might be variables or tags if any, actually let's keep all
            ) {
                // Ignore if it's just punctuation
                if (preg_match('/[a-zA-Z]/', $text)) {
                    $strings[$text] = true;
                }
            }
        }
        
        // Match placeholders in inputs (though we might not have inputs)
        preg_match_all('/placeholder="([^"]+)"/', $content, $matches);
        foreach ($matches[1] as $match) {
            $text = trim($match);
            if (strlen($text) > 1) {
                $strings[$text] = true;
            }
        }
    }
}

file_put_contents('extracted_strings.json', json_encode(array_keys($strings), JSON_PRETTY_PRINT));
echo "Extracted " . count($strings) . " strings.\n";
