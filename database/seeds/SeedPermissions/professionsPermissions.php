<?php

use Caffeinated\Shinobi\Models\Permission;

// Profesiones
Permission::create([
    'name'           => 'Navegar Profesiones',
    'slug'           => 'profesiones.index',
    'description'    => 'Listar profesiones',
]);

Permission::create([
    'name'           => 'Crear Profesiones',
    'slug'           => 'profesiones.create',
    'description'    => 'Crear una profesion',
]);

Permission::create([
    'name'           => 'Visualizar detalle profesion',
    'slug'           => 'profesiones.show',
    'description'    => 'Ver detalle de cada profesion',
]);

Permission::create([
    'name'           => 'Editar Profesion',
    'slug'           => 'profesiones.edit',
    'description'    => 'Editar una Profesion',
]);

Permission::create([
    'name'           => 'Eliminar Profesion',
    'slug'           => 'profesiones.destroy',
    'description'    => 'Eliminar una Profesion',
]);
