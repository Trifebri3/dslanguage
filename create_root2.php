<?php

$index_content = file_get_contents('resources/views/homepage/index.blade.php');
$redesign_content = file_get_contents('DS_Homepage_Sections_Redesign.html');

// Extract everything from @extends to the end of "Our Direction" section
$top_part_regex = '/@extends\(\'homepage\.layouts\.app\'\).*?<!-- SECTION, WHAT WE DO -->/s';
preg_match($top_part_regex, $index_content, $top_matches);
$top_content = $top_matches[0] ?? '';
// Remove the @extends and @section('content') from top_content because we'll add them manually
$top_content = str_replace(["@extends('homepage.layouts.app')", "@section('content')"], '', $top_content);
$top_content = str_replace('<!-- SECTION, WHAT WE DO -->', '', $top_content);

// Extract the rest from "What We Do" to @endsection
$bottom_part_regex = '/<!-- SECTION, WHAT WE DO -->.*@endsection/s';
preg_match($bottom_part_regex, $index_content, $bottom_matches);
$bottom_content = $bottom_matches[0] ?? '';
$bottom_content = str_replace('@endsection', '', $bottom_content);

// Extract CSS from redesign
preg_match('/<style>(.*?)<\/style>/s', $redesign_content, $style_matches);
$css = $style_matches[1] ?? '';

// Clean up CSS to not mess up global styles
$css = str_replace('body{', 'body.disabled-body{', $css);
$css = str_replace('html{', 'html.disabled-html{', $css);
$css = str_replace(['h1,h2,h3,.serif{'], ['.redesign-section h1, .redesign-section h2, .redesign-section h3, .redesign-section .serif{'], $css);
$css = str_replace(['p{'], ['.redesign-section p{'], $css);
$css = str_replace(['a{'], ['.redesign-section a{'], $css);
$css = str_replace('.wrap{', '.redesign-section .wrap{', $css);
$css = str_replace('.context-marker{', '.redesign-section .context-marker{', $css);
$css = str_replace('.context-marker.dark{', '.redesign-section .context-marker.dark{', $css);
$css = str_replace('.context-marker.top{', '.redesign-section .context-marker.top{', $css);
$css = str_replace('.s1{', '.redesign-section .s1{', $css);
$css = str_replace('.diagram{', '.redesign-section .diagram{', $css);
$css = str_replace('.diagram .node{', '.redesign-section .diagram .node{', $css);
$css = str_replace('.diagram .node.mid{', '.redesign-section .diagram .node.mid{', $css);
$css = str_replace('.diagram .line{', '.redesign-section .diagram .line{', $css);
$css = str_replace('.diagram .line::after{', '.redesign-section .diagram .line::after{', $css);
$css = str_replace('.s1-head{', '.redesign-section .s1-head{', $css);
$css = str_replace('.eyebrow{', '.redesign-section .eyebrow{', $css);
$css = str_replace('.eyebrow.on-navy{', '.redesign-section .eyebrow.on-navy{', $css);
$css = str_replace('.s1-head h2{', '.redesign-section .s1-head h2{', $css);
$css = str_replace('.s1-intro{', '.redesign-section .s1-intro{', $css);
$css = str_replace('.s1-intro .cta-row{', '.redesign-section .s1-intro .cta-row{', $css);
$css = str_replace('.btn{', '.redesign-section .btn{', $css);
$css = str_replace('.btn-primary{', '.redesign-section .btn-primary{', $css);
$css = str_replace('.btn-primary:hover{', '.redesign-section .btn-primary:hover{', $css);
$css = str_replace('.btn-outline{', '.redesign-section .btn-outline{', $css);
$css = str_replace('.btn-outline:hover{', '.redesign-section .btn-outline:hover{', $css);
$css = str_replace('.btn:focus-visible{', '.redesign-section .btn:focus-visible{', $css);
$css = str_replace('.btn svg{', '.redesign-section .btn svg{', $css);
$css = str_replace('.cap-list{', '.redesign-section .cap-list{', $css);
$css = str_replace('.cap-row{', '.redesign-section .cap-row{', $css);
$css = str_replace('.cap-row h3{', '.redesign-section .cap-row h3{', $css);
$css = preg_replace('/\.cap-row p\{/', '.redesign-section .cap-row p{', $css);
$css = str_replace('.value-strip{', '.redesign-section .value-strip{', $css);
$css = preg_replace('/\.value-strip p\{/', '.redesign-section .value-strip p{', $css);
$css = str_replace('.s2{', '.redesign-section .s2{', $css);
$css = str_replace('.s2::before{', '.redesign-section .s2::before{', $css);
$css = str_replace('.s2-inner{', '.redesign-section .s2-inner{', $css);
$css = str_replace('.s2-head{', '.redesign-section .s2-head{', $css);
$css = str_replace('.s2-head h2{', '.redesign-section .s2-head h2{', $css);
$css = str_replace('.s2-intro{', '.redesign-section .s2-intro{', $css);
$css = str_replace('.geo{', '.redesign-section .geo{', $css);
$css = str_replace('.geo .anchor{', '.redesign-section .geo .anchor{', $css);
$css = str_replace('.geo .link{', '.redesign-section .geo .link{', $css);
$css = str_replace('.geo .satellites{', '.redesign-section .geo .satellites{', $css);
$css = str_replace('.geo .sat{', '.redesign-section .geo .sat{', $css);
$css = str_replace('.partner-grid{', '.redesign-section .partner-grid{', $css);
$css = str_replace('.partner-cell{', '.redesign-section .partner-cell{', $css);
$css = str_replace('.partner-cell h3{', '.redesign-section .partner-cell h3{', $css);
$css = preg_replace('/\.partner-cell p\{/', '.redesign-section .partner-cell p{', $css);
$css = str_replace('.s2-close{', '.redesign-section .s2-close{', $css);
$css = preg_replace('/\.s2-close p\{/', '.redesign-section .s2-close p{', $css);

// Extract redesign HTML sections
preg_match('/<!-- ============================================================.*?SECTION 1.*?<section class="s1" id="direction">(.*?)<\/section>/s', $redesign_content, $s1_matches);
$s1_html = $s1_matches[0] ?? '';

preg_match('/<!-- ============================================================.*?SECTION 2.*?<section class="s2" id="partnerships">(.*?)<\/section>/s', $redesign_content, $s2_matches);
$s2_html = $s2_matches[0] ?? '';

$root_blade = "@extends('homepage.layouts.app')\n\n@section('content')\n\n";

$root_blade .= "<div id=\"top-section\" style=\"display: none;\">\n" . $top_content . "\n</div>\n\n";

$root_blade .= "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\n";
$root_blade .= "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\n";
$root_blade .= "<link href=\"https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500&family=Inter:wght@400;500;600&display=swap\" rel=\"stylesheet\">\n\n";

$root_blade .= "<style>\n" . $css . "\n</style>\n\n";

$root_blade .= "<div class=\"redesign-section\">\n";
$root_blade .= "  <div class=\"context-marker top\" style=\"cursor: pointer; background: #fff; margin-bottom: -112px; position: relative; z-index: 10; padding: 20px; font-weight: bold; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border-radius: 8px; width: max-content; margin-top: 20px;\" onclick=\"document.getElementById('top-section').style.display = 'block'; this.style.display = 'none'; window.scrollTo({top: 0, behavior: 'smooth'});\">\n    ↑ Click here to view Biography & Hero section\n  </div>\n\n";

$root_blade .= $s1_html . "\n\n" . $s2_html . "\n";

$root_blade .= "  <div class=\"context-marker dark\" style=\"cursor: pointer; background: #fff; margin-top: 20px; padding: 20px; font-weight: bold; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border-radius: 8px; width: max-content;\" onclick=\"document.getElementById('bottom-section').style.display = 'block'; this.style.display = 'none'; setTimeout(() => { document.getElementById('bottom-section').scrollIntoView({behavior: 'smooth'}); }, 100);\">\n    ↓ Click here to view Employer Readiness & Other sections\n  </div>\n\n";

$root_blade .= "</div>\n\n";

$root_blade .= "<div id=\"bottom-section\" style=\"display: none;\">\n" . $bottom_content . "\n</div>\n\n";

$root_blade .= "@endsection\n";

file_put_contents('resources/views/homepage/root.blade.php', $root_blade);
echo "Successfully generated root.blade.php with hidden sections\n";
