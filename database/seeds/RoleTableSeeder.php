<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_dev = factory(Role::class)->create([
            'name' => 'dev',
            'guard_name' => 'web',
        ]);

        $role_admin = factory(Role::class)->create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $role_kurir = factory(Role::class)->create([
            'name' => 'kurir',
            'guard_name' => 'web',
        ]);

        $role_staff = factory(Role::class)->create([
            'name' => 'staff',
            'guard_name' => 'web',
        ]);

        $userDev = factory(\App\User::class)->create([
            'name' => 'Developer',
            'email' => 'dev@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);

        $userDev->assignRole($role_dev->name);

        $userAdmin = factory(\App\User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);

        $userAdmin->assignRole($role_admin->name);

        $userKurir = factory(\App\User::class)->create([
            'name' => 'Kurir',
            'email' => 'kurir@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);

        $userKurir->assignRole($role_kurir->name);

        $userStaff = factory(\App\User::class)->create([
            'name' => 'Staff',
            'email' => 'staff@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);

        $userStaff->assignRole($role_staff->name);
    }
}
