<?php

use App\Teacher;
use App\User;
use Carbon\Carbon;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'              => 'Juan',
            'middleName'        => 'José',
            'firstLastName'     => 'Silva',
            'secondLastName'    => 'Lara',
            'phone'             => '4771239780',
            'email'             => 'juanjose60@epca.edu.mx',
            'address'           => 'Boulevard Solis No. 61',
            'zipCode'           => '42760',
            'birthday'          => Carbon::parse('1960-12-15'),
            'username'          => 'juanjose',
            'password'          => bcrypt('jose1234'),
            'curp'              => 'SILJ601215HGTLRN18',
            'remember_token'    => Str::random(10)
        ]);

        $user->assignRoles('Profesor');

        $user->givePermissionTo('alumnos.index', 'profesores.index', 'carreras.index', 'horarios.index', 'periodo.index', 'grupos.index');

        Teacher::create([
            'user_id'       => $user->id,
            'profession_id' => 2,
            'start_date'    => Carbon::parse('2017-01-07')
        ]);

        // -------------------------

        $user = User::create([
            'name'              => 'Daniel',
            'middleName'        => '',
            'firstLastName'     => 'Rios',
            'secondLastName'    => 'Ceballos',
            'phone'             => '4771234569',
            'email'             => 'dceballos60@epca.edu.mx',
            'address'           => 'Avenida Las Americas No. 99',
            'zipCode'           => '39806',
            'birthday'          => Carbon::parse('1978-08-22'),
            'username'          => 'dceballos',
            'password'          => bcrypt('ceballos1234'),
            'curp'              => 'CERD780822HGTBSN13',
            'remember_token'    => Str::random(10)
        ]);

        $user->assignRoles('Profesor');

        $user->givePermissionTo('alumnos.index', 'profesores.index', 'carreras.index', 'horarios.index', 'periodo.index', 'grupos.index');

        Teacher::create([
            'user_id'       => $user->id,
            'profession_id' => 2,
            'start_date'    => Carbon::parse('2015-04-20')
        ]);

        // -------------------------

        $user = User::create([
            'name'              => 'Ma',
            'middleName'        => 'Dolores',
            'firstLastName'     => 'Juarez',
            'secondLastName'    => 'Ramírez',
            'phone'             => '4779873025',
            'email'             => 'MaDolores@epca.edu.mx',
            'address'           => 'Avenida Oruña No. 134',
            'zipCode'           => '45750',
            'birthday'          => Carbon::parse('1985-02-10'),
            'username'          => 'madolores',
            'password'          => bcrypt('dolores1234'),
            'curp'              => 'JURM850210MGTRMR55',
            'remember_token'    => Str::random(10)
        ]);

        $user->assignRoles('Profesor');

        $user->givePermissionTo('alumnos.index', 'profesores.index', 'carreras.index', 'horarios.index', 'periodo.index', 'grupos.index');

        Teacher::create([
            'user_id'       => $user->id,
            'profession_id' => 2,
            'start_date'    => Carbon::parse('2010-01-28')
        ]);
    }
}
