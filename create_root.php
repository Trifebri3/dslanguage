<?php

$index_content = file_get_contents('resources/views/homepage/index.blade.php');
$redesign_content = file_get_contents('DS_Homepage_Sections_Redesign.html');

// Extract everything from @extends to the end of "Our Direction" section
$top_part_regex = '/@extends\(\'homepage\.layouts\.app\'\).*?<!-- SECTION, WHAT WE DO -->/s';
preg_match($top_part_regex, $index_content, $top_matches);
$top_content = $top_matches[0] ?? '';
// Remove the last <!-- SECTION, WHAT WE DO --> from top_content
$top_content = str_replace('<!-- SECTION, WHAT WE DO -->', '', $top_content);

// Extract the rest from "What We Do" to @endsection
$bottom_part_regex = '/<!-- SECTION, WHAT WE DO -->.*@endsection/s';
preg_match($bottom_part_regex, $index_content, $bottom_matches);
$bottom_content = $bottom_matches[0] ?? '';

// Extract CSS from redesign
preg_match('/<style>(.*?)<\/style>/s', $redesign_content, $style_matches);
$css = $style_matches[1] ?? '';

// Clean up CSS to not mess up global styles
$css = str_replace('body{', 'body.disabled-body{', $css);
$css = str_replace('html{', 'html.disabled-html{', $css);
$css = str_replace(['h1,h2,h3,.serif{'], ['.redesign-section h1, .redesign-section h2, .redesign-section h3, .redesign-section .serif{'], $css);
$css = str_replace(['p{'], ['.redesign-section p{'], $css);
$css = str_replace(['a{'], ['.redesign-section a{'], $css);

// Extract redesign HTML sections
preg_match('/<!-- ============================================================.*?SECTION 1.*?<section class="s1" id="direction">(.*?)<\/section>/s', $redesign_content, $s1_matches);
$s1_html = $s1_matches[0] ?? '';

preg_match('/<!-- ============================================================.*?SECTION 2.*?<section class="s2" id="partnerships">(.*?)<\/section>/s', $redesign_content, $s2_matches);
$s2_html = $s2_matches[0] ?? '';

$root_blade = $top_content . "\n\n" . 
"<style>\n" . $css . "\n</style>\n\n" . 
"<div class=\"redesign-section\">\n" . 
$s1_html . "\n\n" . $s2_html . 
"\n</div>\n\n" . 
$bottom_content;

file_put_contents('resources/views/homepage/root.blade.php', $root_blade);
echo "Successfully generated root.blade.php\n";
