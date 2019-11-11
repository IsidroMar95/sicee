<?php

use Caffeinated\Shinobi\Models\Permission;

Permission::create([
    'name'           => 'Crear Grupos',
    'slug'           => 'grupos.create',
    'description'    => 'Crear un grupo',
]);

Permission::create([
    'name'           => 'Navegar Grupos',
    'slug'           => 'grupos.index',
    'description'    => 'Listar grupos',
]);

Permission::create([
    'name'           => 'Visualizar detalle Grupo',
    'slug'           => 'grupos.show',
    'description'    => 'Ver detalle de cada grupo',
]);

Permission::create([
    'name'           => 'Editar Grupo',
    'slug'           => 'grupos.edit',
    'description'    => 'Editar un grupo',
]);

Permission::create([
    'name'           => 'Eliminar Grupo',
    'slug'           => 'grupos.destroy',
    'description'    => 'Eliminar un grupo',
]);
