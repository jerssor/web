<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'Operacion']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.hospedajes.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.hospedajes.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.hospedajes.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.hospedajes.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.tipos_hospedajes.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tipos_hospedajes.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tipos_hospedajes. edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tipos_hospedajes.destroy'])->syncRoles([$role1, $role2]);
    }
}
