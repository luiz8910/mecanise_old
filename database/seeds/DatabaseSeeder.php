<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        /*DB::table('people')->insert([
            'role_id' => 5,
            'workshop_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'cel' => '(15) 997454531',
        ]);*/
        DB::table('workshops')->insert([
            'name' => 'Oficina Admin',
            'cel' => '(15) 997454531',
            'email' => 'admin@admin.com',
        ]);

        $roles[] = 'Administrador';
        $roles[] = 'Operador';
        $roles[] = 'Administrador do Sistema';

        foreach ($roles as $role)
        {
            DB::table('roles')->insert([
                'name' => $role,
            ]);
        }

        DB::table('users')->insert([
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'person_id' => 1,
            'workshop_id' => 1
        ]);




    }
}
