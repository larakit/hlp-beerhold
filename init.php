<?php
//цветная фотка
Larakit\Twig::register_function('beerhold', function ($w, $h) {
    return sprintf('http://beerhold.it/%d/%d?hash=%s', $w, $h, microtime());
});
//черно-белая
Larakit\Twig::register_function('beerhold_g', function ($w, $h) {
    return sprintf('http://beerhold.it/%d/%d/g?hash=%s', $w, $h, microtime());
});
//сепия
Larakit\Twig::register_function('beerhold_s', function ($w, $h) {
    return sprintf('http://beerhold.it/%d/%d/s?hash=%s', $w, $h, microtime());
});
//негатив
Larakit\Twig::register_function('beerhold_n', function ($w, $h) {
    return sprintf('http://beerhold.it/%d/%d/n?hash=%s', $w, $h, microtime());
});