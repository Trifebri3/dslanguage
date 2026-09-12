<?php
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('resources/views'));
$strings = json_decode(file_get_contents('extracted_strings.json'), true);

// Sort strings by length descending to prevent partial replacements
usort($strings, function($a, $b) {
    return strlen($b) - strlen($a);
});

foreach ($files as $file) {
    if ($file->getExtension() === 'php') {
        $content = file_get_contents($file->getRealPath());
        $original = $content;
        
        foreach ($strings as $str) {
            // We want to match `> string <`
            // Escape the string for regex
            $safeStr = preg_quote($str, '/');
            // Allow multiple spaces/newlines in the target to match just spaces in the source
            $safeRegex = preg_replace('/\s+/', '\s+', $safeStr);
            
            // Replace ONLY if it's perfectly surrounded by > and < (ignoring whitespace)
            $content = preg_replace_callback(
                '/>(\s*)(' . $safeRegex . ')(\s*)</s', 
                function($matches) use ($str) {
                    // Escape single quotes for the translation function
                    $escaped = str_replace("'", "\'", $str);
                    return '>' . $matches[1] . "{{ __('" . $escaped . "') }}" . $matches[3] . '<';
                }, 
                $content
            );
        }
        
        if ($original !== $content) {
            file_put_contents($file->getRealPath(), $content);
            echo "Updated: " . $file->getFilename() . "\n";
        }
    }
}
echo "Done wrapping blade files.\n";
