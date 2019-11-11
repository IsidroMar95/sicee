<?php

use Caffeinated\Shinobi\Models\Permission;

Permission::create([
    'name'           => 'Crear niveles Grado',
    'slug'           => 'niveles-grado.create',
    'description'    => 'Crear un nivel de Grado',
]);

Permission::create([
    'name'           => 'Navegar niveles Grado',
    'slug'           => 'niveles-grado.index',
    'description'    => 'Listar niveles Grado',
]);

Permission::create([
    'name'           => 'Visualizar detalle nivel de Grado',
    'slug'           => 'niveles-grado.show',
    'description'    => 'Ver detalle de cada nivel de Grado',
]);

Permission::create([
    'name'           => 'Editar nivel de Grado',
    'slug'           => 'niveles-grado.edit',
    'description'    => 'Editar un nivel de Grado',
]);

Permission::create([
    'name'           => 'Eliminar nivel de Grado',
    'slug'           => 'niveles-grado.destroy',
    'description'    => 'Eliminar un nivel de Grado',
]);
