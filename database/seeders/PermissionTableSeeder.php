<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{

    public function run()
    {
        //Permissions
        $permissions = [

            "students",
            "add-student",
            "edit-student",
            "delete-student",

            "responsables",
            "add-responsable",
            "edit-responsable",
            "delete-responsable",

            "directeurrs",
            "add-directeur",
            "edit-directeur",
            "delete-directeur",

            "permissions",
            "add-role",
            "show-role",
            "edit-role",
            "delete-role",

        ];
       
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}