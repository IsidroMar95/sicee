<?php

use Caffeinated\Shinobi\Models\Permission;


// Periodos Escolares

Permission::create([
    'name'           => 'Navegar Periodos Escolares',
    'slug'           => 'periodos-escolares.index',
    'description'    => 'Listar Periodos Escolares',
]);

Permission::create([
    'name'           => 'Crear Periodo Escolar',
    'slug'           => 'periodos-escolares.create',
    'description'    => 'Crear un Periodo Escolar',
]);

Permission::create([
    'name'           => 'Visualizar detalle Periodo Escolar',
    'slug'           => 'periodos-escolares.show',
    'description'    => 'Ver detalle de cada Periodo Escolar',
]);

Permission::create([
    'name'           => 'Editar Periodo Escolar',
    'slug'           => 'periodos-escolares.edit',
    'description'    => 'Editar un Periodo Escolar',
]);

Permission::create([
    'name'           => 'Eliminar Periodo Escolar',
    'slug'           => 'periodos-escolares.destroy',
    'description'    => 'Eliminar un Periodo Escolar',
]);
