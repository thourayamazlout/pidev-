<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKeAapsP\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKeAapsP/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKeAapsP.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKeAapsP\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKeAapsP\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KeAapsP',
    'container.build_id' => '0f19e831',
    'container.build_time' => 1617107637,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKeAapsP');
