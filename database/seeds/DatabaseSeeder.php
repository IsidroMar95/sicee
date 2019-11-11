<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(School_periodsTableSeeder::class);
        $this->call(ProfessionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(Grade_levelsTableSeeder::class);
        $this->call(CareersTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
    }
}
