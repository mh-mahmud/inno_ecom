<?php

namespace App\Permissions;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

trait HasPermissionsTrait {

    public function givePermissionsTo(... $permissions) 
    {

        $permissions = $this->getAllPermissions($permissions);
        
        if($permissions === null) {

            return $this;

        }

        $this->permissions()->saveMany($permissions);
        return $this;

    }

    public function withdrawPermissionsTo( ... $permissions ) 
    {

        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;

    }

    public function refreshPermissions( ... $permissions ) 
    {

        $this->permissions()->detach();
        return $this->givePermissionsTo($permissions);

    }

    public function hasPermissionTo($permission) 
    {

        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);

    }

    public function hasPermissionThroughRole($permission) 
    {
        $currentUserRoleId = Auth::user()->role_id;
        foreach ($permission->roles as $role){
            if($currentUserRoleId === $role->id){
                return true;
            }
            // if($this->roles->contains($role)) {

            //     return true;

            // }
        }

        return false;
    }

    public function hasRole( ... $roles ) {

        foreach ($roles as $role) {

            if ($this->roles->contains('slug', $role)) {

                return true;
            }
        }

        return false;
    }

    public function roles() 
    {

        return $this->belongsToMany(Role::class,'users_roles','user_id');

    }

    public function permissions() 
    {
        
        return $this->belongsToMany(Permission::class,'users_permissions','user_id');

    }

    protected function hasPermission($permission) 
    {   
        return (bool) $this->permissions->where('slug', $permission->slug)->count();

    }

    protected function getAllPermissions(array $permissions) 
    {

        return Permission::whereIn('slug',$permissions)->get();

    }

    protected function getAllRoles(array $roles)
    {

        return Role::whereIn('slug',$roles)->get();

    }

}