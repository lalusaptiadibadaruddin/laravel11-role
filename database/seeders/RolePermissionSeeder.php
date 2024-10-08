<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;

    public function run(): void
    {
        //
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
            $it = User::create(array_merge([
                'email' => 'it@gmail.com',
                'name' => 'it',
            ], $default_user_value));

            $staff = User::create(array_merge([
                'email' => 'staff@gmail.com',
                'name' => 'staff',
            ], $default_user_value));

            $spv = User::create(array_merge([
                'email' => 'spv@gmail.com',
                'name' => 'spv',
            ], $default_user_value));

            $manager = User::create(array_merge([
                'email' => 'manager@gmail.com',
                'name' => 'manager',
            ], $default_user_value));

            $role_staff = Role::create(['name' => 'staff']);
            $role_spv = Role::create(['name' => 'spv']);
            $role_manager = Role::create(['name' => 'manager']);
            $role_it = Role::create(['name' => 'it']);

            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);
            Permission::create((['name' => 'read konfigurasi']));

            $role_it->givePermissionTo('read role');
            $role_it->givePermissionTo('create role');
            $role_it->givePermissionTo('update role');
            $role_it->givePermissionTo('delete role');
            $role_it->givePermissionTo('read konfigurasi');

            $staff->assignrole('staff');
            $staff->assignrole('spv');
            $spv->assignrole('spv');
            $manager->assignrole('manager');
            $manager->assignrole('it');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
        }

    }
}
