<?php

use Caffeinated\Shinobi\Models\Permission;


// Carreras

Permission::create([
    'name'           => 'Navegar Carreras',
    'slug'           => 'carreras.index',
    'description'    => 'Listar carreras',
]);

Permission::create([
    'name'           => 'Crear Carreras',
    'slug'           => 'carreras.create',
    'description'    => 'Crear una carrera',
]);

Permission::create([
    'name'           => 'Visualizar detalle Carrera',
    'slug'           => 'carreras.show',
    'description'    => 'Ver detalle de cada carrera',
]);

Permission::create([
    'name'           => 'Editar Carrera',
    'slug'           => 'carreras.edit',
    'description'    => 'Editar una carrera',
]);

Permission::create([
    'name'           => 'Eliminar Carrera',
    'slug'           => 'carreras.destroy',
    'description'    => 'Eliminar una carrera',
]);
