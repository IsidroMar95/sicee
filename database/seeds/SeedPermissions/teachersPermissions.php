<?php

use Caffeinated\Shinobi\Models\Permission;

// Profesores

Permission::create([
    'name'           => 'Navegar Profesores',
    'slug'           => 'profesores.index',
    'description'    => 'Listar Profesores',
]);

Permission::create([
    'name'           => 'Crear Profesores',
    'slug'           => 'profesores.create',
    'description'    => 'Crear un Profesor',
]);

Permission::create([
    'name'           => 'Visualizar detalle Profesor',
    'slug'           => 'profesores.show',
    'description'    => 'Ver detalle de cada Profesor',
]);

Permission::create([
    'name'           => 'Editar Profesor',
    'slug'           => 'profesores.edit',
    'description'    => 'Editar un Profesor',
]);

Permission::create([
    'name'           => 'Eliminar Profesor',
    'slug'           => 'profesores.destroy',
    'description'    => 'Eliminar un Profesor',
]);
