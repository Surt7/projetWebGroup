<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEzttgJH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEzttgJH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEzttgJH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEzttgJH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEzttgJH\App_KernelDevDebugContainer([
    'container.build_hash' => 'EzttgJH',
    'container.build_id' => '97b732f6',
    'container.build_time' => 1659865603,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEzttgJH');
