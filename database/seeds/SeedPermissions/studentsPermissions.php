<?php

use Caffeinated\Shinobi\Models\Permission;

//Alumnos
Permission::create([
    'name'           => 'Navegar Alumnos',
    'slug'           => 'alumnos.index',
    'description'    => 'Listar estudiantes',
]);

Permission::create([
    'name'           => 'Crear Alumnos',
    'slug'           => 'alumnos.create',
    'description'    => 'Crear un Alumno',
]);

Permission::create([
    'name'           => 'Visualizar detalle Alumno',
    'slug'           => 'alumnos.show',
    'description'    => 'Ver detalle de cada alumno',
]);

Permission::create([
    'name'           => 'Editar Alumnos',
    'slug'           => 'alumnos.edit',
    'description'    => 'Editar un alumno',
]);

Permission::create([
    'name'           => 'Eliminar Alumnos',
    'slug'           => 'alumnos.destroy',
    'description'    => 'Eliminar un alumno',
]);
