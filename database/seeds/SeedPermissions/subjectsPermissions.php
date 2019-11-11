<?php

use Caffeinated\Shinobi\Models\Permission;

// Materias

Permission::create([
    'name'           => 'Navegar Materias',
    'slug'           => 'materias.index',
    'description'    => 'Listar Materias',
]);

Permission::create([
    'name'           => 'Crear Materias',
    'slug'           => 'materias.create',
    'description'    => 'Crear una Materia',
]);

Permission::create([
    'name'           => 'Visualizar detalle Materia',
    'slug'           => 'materias.show',
    'description'    => 'Ver detalle de cada Materia',
]);

Permission::create([
    'name'           => 'Editar Materia',
    'slug'           => 'materias.edit',
    'description'    => 'Editar una Materia',
]);

Permission::create([
    'name'           => 'Eliminar Materia',
    'slug'           => 'materias.destroy',
    'description'    => 'Eliminar una Materia',
]);
