<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home socioo
Breadcrumbs::for('owner.index', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('owner.index'));
});
// Home > Form
Breadcrumbs::for('ligas.tabla', function (BreadcrumbTrail $trail) {
    $trail->parent('owner.index');
    $trail->push('Ligas', route('liga.tabla'));
});
Breadcrumbs::for('jugadores.tabla', function (BreadcrumbTrail $trail) {
    $trail->parent('owner.index');
    $trail->push('Jugadores', route('jugadores.tabla'));
});


Breadcrumbs::for('player.index', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('player.index'));
});
Breadcrumbs::for('ayuda.index', function (BreadcrumbTrail $trail) {
    $trail->parent('player.index');
    $trail->push('Ayuda', route('ayuda.index'));
});
