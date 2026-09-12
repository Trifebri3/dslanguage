<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id', 'de', 'nl', 'ja'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/', function () {
    return view('homepage.root');
})->name('homepage.index');

Route::get('/about', function () {
    return view('about.index');
})->name('about.index');

Route::get('/programs', function () {
    return view('programs.index');
})->name('programs.index');

Route::get('/programs/german-language', function () {
    return view('programs.german-language');
})->name('programs.german-language');

Route::get('/programs/ausbildung', function () {
    return view('programs.ausbildung');
})->name('programs.ausbildung');

Route::get('/programs/study-in-germany', function () {
    return view('programs.study-in-germany');
})->name('programs.study-in-germany');

Route::get('/programs/supporting-services', function () {
    return view('programs.supporting-services');
})->name('programs.supporting-services');

Route::get('/japan-career-hub', function () {
    return view('japan.index');
})->name('japan.index');

Route::get('/netherlands-hub', function () {
    return view('netherlands.index');
})->name('netherlands.index');

Route::get('/insights', function () {
    return view('insights.index');
})->name('insights.index');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact.index');

Route::get('/employer-readiness', function () {
    return view('employer.index');
})->name('employer.index');

Route::get('/employer-readiness/candidate-readiness', function () {
    return view('employer.candidate-readiness');
})->name('employer.candidate-readiness');

Route::get('/employer-readiness/language-readiness', function () {
    return view('employer.language-readiness');
})->name('employer.language-readiness');

Route::get('/employer-readiness/cultural-readiness', function () {
    return view('employer.cultural-readiness');
})->name('employer.cultural-readiness');

Route::get('/employer-readiness/international-talent', function () {
    return view('employer.international-talent');
})->name('employer.international-talent');

Route::get('/employer-readiness/hospitality-talent', function () {
    return view('employer.hospitality-talent');
})->name('employer.hospitality-talent');

Route::get('/employer-readiness/employer-solutions', function () {
    return view('employer.employer-solutions');
})->name('employer.employer-solutions');

Route::get('/employer-readiness/document-readiness', function () {
    return view('employer.document-readiness');
})->name('employer.document-readiness');

Route::get('/sitemap.xml', function () {
    $urls = [
        '/', '/about', '/programs', '/programs/german-language', '/programs/ausbildung',
        '/programs/study-in-germany', '/programs/supporting-services', '/japan-career-hub',
        '/netherlands-hub', '/insights', '/contact', '/employer-readiness',
        '/employer-readiness/candidate-readiness', '/employer-readiness/language-readiness',
        '/employer-readiness/cultural-readiness', '/employer-readiness/international-talent',
        '/employer-readiness/hospitality-talent', '/employer-readiness/employer-solutions',
        '/employer-readiness/document-readiness'
    ];
    
    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($urls as $url) {
        $xml .= '<url><loc>' . url($url) . '</loc><changefreq>weekly</changefreq><priority>' . ($url == '/' ? '1.0' : '0.8') . '</priority></url>';
    }
    $xml .= '</urlset>';
    
    return response($xml, 200)->header('Content-Type', 'text/xml');
});
