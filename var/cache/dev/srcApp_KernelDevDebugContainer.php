<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2UbJkMs\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2UbJkMs/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2UbJkMs.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2UbJkMs\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container2UbJkMs\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '2UbJkMs',
    'container.build_id' => 'af0c7ee9',
    'container.build_time' => 1614502017,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2UbJkMs');
