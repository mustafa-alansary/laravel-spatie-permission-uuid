<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;
use Spatie\Permission\Contracts\Permission as PermissionContract;
use App\Traits\Uuid;

class Permission extends SpatiePermission implements PermissionContract
{
    use  Uuid;

}
