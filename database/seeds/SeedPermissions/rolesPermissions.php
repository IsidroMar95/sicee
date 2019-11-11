<?php

use Caffeinated\Shinobi\Models\Permission;

Permission::create([
    'name'           => 'Crear rol',
    'slug'           => 'roles.create',
    'description'    => 'Crear un rol',
]);

Permission::create([
    'name'           => 'Navegar rol',
    'slug'           => 'roles.index',
    'description'    => 'Listar roles',
]);

Permission::create([
    'name'           => 'Visualizar detalle rol',
    'slug'           => 'roles.show',
    'description'    => 'Ver detalle de cada rol',
]);

Permission::create([
    'name'           => 'Editar rol',
    'slug'           => 'roles.edit',
    'description'    => 'Editar un rol',
]);

Permission::create([
    'name'           => 'Eliminar rol',
    'slug'           => 'roles.destroy',
    'description'    => 'Eliminar un rol',
]);
