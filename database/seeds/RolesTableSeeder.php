<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Tiene acceso total a las operaciones del sistema',
            'special' => 'all-access'
        ]);

        $roleAlumno = Role::create([
            'name' => 'Alumno',
            'slug' => 'alumno',
            'description' => 'Tiene acceso a sus calificaciones, su carrera, horarios y profesores',
        ]);

        $roleAlumno->givePermissionTo('horarios.index', 'carreras.index', 'profesores.index');



        $roleProfesor = Role::create([
            'name' => 'Profesor',
            'slug' => 'profesor',
            'description' => 'Tiene acceso a sus materias, horarios, grupos y otros profesores',
        ]);

        $roleProfesor->givePermissionTo('materias.index', 'horarios.index', 'profesores.index', 'carreras.index');

        Role::create([
            'name' => 'Coordinador',
            'slug' => 'coordinador',
            'description' => 'Tiene acceso a sus carreras, grupos y otros profesores',
        ]);
    }
}
