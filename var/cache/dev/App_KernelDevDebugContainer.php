<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJHe6ZPe\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJHe6ZPe/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJHe6ZPe.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJHe6ZPe\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJHe6ZPe\App_KernelDevDebugContainer([
    'container.build_hash' => 'JHe6ZPe',
    'container.build_id' => '514c5f12',
    'container.build_time' => 1715039551,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJHe6ZPe');
