<?php

namespace CanalTP\SamCoreBridgeBundle\Permission;

use CanalTP\SamEcoreApplicationManagerBundle\Permission\AbstractBusinessPermissionModule;

class BusinessPermissionModule extends AbstractBusinessPermissionModule
{
    public function getName()
    {
        return 'sam_business_module';
    }
}
