<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'              => 'Maria',
            'middleName'        => 'Concepción',
            'firstLastName'     => 'Anzola',
            'secondLastName'    => 'Pacheco',
            'phone'             => '4774613360',
            'email'             => 'mari62@epca.edu.mx',
            'address'           => 'Agustín Melgar #102 Colonia: Héroes de Chapultepec',
            'zipCode'           => '37190',
            'birthday'          => Carbon::parse('1962-08-10'), //YYYY-MM-dd
            'username'          => 'mari6208',
            'password'          => bcrypt('epca123'),
            'curp'              => 'AOPM620810MGTNCR97',
            'remember_token'    => Str::random(10)
        ]);

        $user->assignRoles('Admin');
    }
}
