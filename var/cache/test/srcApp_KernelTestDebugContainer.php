<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCVIN8fx\srcApp_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCVIN8fx/srcApp_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerCVIN8fx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerCVIN8fx\srcApp_KernelTestDebugContainer::class, srcApp_KernelTestDebugContainer::class, false);
}

return new \ContainerCVIN8fx\srcApp_KernelTestDebugContainer([
    'container.build_hash' => 'CVIN8fx',
    'container.build_id' => 'b4e0a985',
    'container.build_time' => 1555341554,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCVIN8fx');
