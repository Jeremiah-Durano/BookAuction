<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8DT0qvx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8DT0qvx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8DT0qvx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8DT0qvx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container8DT0qvx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '8DT0qvx',
    'container.build_id' => 'faa79ef2',
    'container.build_time' => 1554810024,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8DT0qvx');
