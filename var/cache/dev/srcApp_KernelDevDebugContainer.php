<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXc6VZZ0\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXc6VZZ0/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXc6VZZ0.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXc6VZZ0\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXc6VZZ0\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Xc6VZZ0',
    'container.build_id' => 'c2669e83',
    'container.build_time' => 1554831672,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXc6VZZ0');
