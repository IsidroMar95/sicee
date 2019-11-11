<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Alumnos
        require __DIR__ . '/SeedPermissions/studentsPermissions.php';
        //Carreras
        require __DIR__ . '/SeedPermissions/careersPermissions.php';
        //Materias
        require __DIR__ . '/SeedPermissions/subjectsPermissions.php';
        //Miveles Grado
        require __DIR__ . '/SeedPermissions/grade_levelsPermissions.php';
        //Periodos Escolares
        require __DIR__ . '/SeedPermissions/school_periodsPermissions.php';
        //Profesiones
        require __DIR__ . '/SeedPermissions/professionsPermissions.php';
        //Profesores
        require __DIR__ . '/SeedPermissions/teachersPermissions.php';
        //Roles
        require __DIR__ . '/SeedPermissions/rolesPermissions.php';
        //Grupos
        require __DIR__ . '/SeedPermissions/groupsPermissions.php';
        //Horarios
        require __DIR__ . '/SeedPermissions/schedulesPermissions.php';
    }
}
