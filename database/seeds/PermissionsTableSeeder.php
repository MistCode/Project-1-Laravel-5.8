<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
    	//Users
        Permission::create([
        	'name'   		=> 'Navegar Usuarios',
        	'slug'   		=> 'users.index',
        	'description'   => 'Lista y navega todos los usuario del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Ver detalles de Usuarios',
        	'slug'   		=> 'users.show',
        	'description'   => 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Edición Usuarios',
        	'slug'   		=> 'users.edit',
        	'description'   => 'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Eliminar Usuarios',
        	'slug'   		=> 'users.destroy',
        	'description'   => 'Eliminar cualquier usuarios del sistema',
        ]);

        //Roles
        Permission::create([
        	'name'   		=> 'Navegar Roles',
        	'slug'   		=> 'roles.index',
        	'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Ver detalles de Rol',
        	'slug'   		=> 'roles.show',
        	'description'   => 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Edición Roles',
        	'slug'   		=> 'roles.create',
        	'description'   => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Edición Roles',
        	'slug'   		=> 'roles.edit',
        	'description'   => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Eliminar Rol',
        	'slug'   		=> 'roles.destroy',
        	'description'   => 'Eliminar cualquier rol del sistema',
        ]);

        //Registro/Grupos
        Permission::create([
        	'name'   		=> 'Navegar Grupos',
        	'slug'   		=> 'grupos.index',
        	'description'   => 'Lista y navega todos los grupos del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Ver detalles de Grupo',
        	'slug'   		=> 'grupos.show',
        	'description'   => 'Ver en detalle cada grupo del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Edición Grupos',
        	'slug'   		=> 'grupos.create',
        	'description'   => 'Editar cualquier dato de un grupo del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Edición Grupos',
        	'slug'   		=> 'grupos.edit',
        	'description'   => 'Editar cualquier dato de un grupo del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Eliminar Grupo',
        	'slug'   		=> 'grupos.destroy',
        	'description'   => 'Eliminar cualquier grupo del sistema',
        ]);

        //Comunidades
        Permission::create([
        	'name'   		=> 'Navegar Comunidades',
        	'slug'   		=> 'comunidades.index',
        	'description'   => 'Lista y navega todos los comunidades del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Ver detalles de Comunidad',
        	'slug'   		=> 'comunidades.show',
        	'description'   => 'Ver en detalle cada comunidad del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Edición Comunidades',
        	'slug'   		=> 'comunidades.create',
        	'description'   => 'Editar cualquier dato de un comunidad del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Edición Comunidades',
        	'slug'   		=> 'comunidades.edit',
        	'description'   => 'Editar cualquier dato de un comunidad del sistema',
        ]);

        Permission::create([
        	'name'   		=> 'Eliminar Comunidad',
        	'slug'   		=> 'comunidades.destroy',
        	'description'   => 'Eliminar cualquier comunidad del sistema',
        ]);
    }
}
