<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRoot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'write employees']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'read employees']);
        $role->givePermissionTo($permission);

        $role = Role::create(['name' => 'user']);

        DB::table('users')
            ->insert([
                'name' => 'root',
                'password' => bcrypt('castro'),
                'email' => 'root'
            ]);
    }
}
