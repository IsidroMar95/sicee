<?php

use Caffeinated\Shinobi\Models\Permission;

Permission::create([
    'name'           => 'Crear Horarios',
    'slug'           => 'horarios.create',
    'description'    => 'Crear un Horario',
]);

Permission::create([
    'name'           => 'Navegar Horarios',
    'slug'           => 'horarios.index',
    'description'    => 'Listar Horarios',
]);

Permission::create([
    'name'           => 'Visualizar detalle Horario',
    'slug'           => 'horarios.show',
    'description'    => 'Ver detalle de cada Horario',
]);

Permission::create([
    'name'           => 'Editar Horario',
    'slug'           => 'horarios.edit',
    'description'    => 'Editar un Horario',
]);

Permission::create([
    'name'           => 'Eliminar Horario',
    'slug'           => 'horarios.destroy',
    'description'    => 'Eliminar un Horario',
]);
