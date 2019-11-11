<?php

use App\Student;
use App\User;
use Carbon\Carbon;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'              => 'Omar',
            'middleName'        => 'Alejandro',
            'firstLastName'     => 'León',
            'secondLastName'    => 'Ramírez',
            'phone'             => '4776473413',
            'email'             => 'omarleon@epca.edu.mx',
            'address'           => 'Calle Santo del Velasquez No. 29',
            'zipCode'           => '5055',
            'birthday'          => Carbon::parse('1996-12-10'),
            'username'          => 'omarleon',
            'password'          => bcrypt('omar1234'),
            'curp'              => 'LERO961012HGTNMM14',
            'remember_token'    => Str::random(10)
        ]);

        $user->assignRoles('Alumno');

        $user->givePermissionTo('carreras.index', 'horarios.index', 'periodo.index','materias.index');

        Student::create([
            'user_id'   => $user->id,
            'oldSchool' => 'Nocturna',
        ]);


        // ---------------------

        $user = User::create([
            'name'              => 'Isidro',
            'middleName'        => 'Alfredo',
            'firstLastName'     => 'Martínez',
            'secondLastName'    => 'Ramírez',
            'phone'             => '4776462056',
            'email'             => 'isidrom95@epca.edu.mx',
            'address'           => 'Isla Española No. 106',
            'zipCode'           => '37408',
            'birthday'          => Carbon::parse('1995-05-15'),
            'username'          => 'isidroa',
            'password'          => bcrypt('isidro1234'),
            'curp'              => 'MARI950515HGTRMS02',
            'remember_token'    => Str::random(10)
        ]);

        $user->assignRoles('Alumno');

        $user->givePermissionTo('carreras.index', 'horarios.index', 'periodo.index');

        Student::create([
            'user_id'   => $user->id,
            'oldSchool' => 'CECyTEG',
        ]);
    }
}
