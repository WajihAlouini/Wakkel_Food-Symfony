<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIpaE0Zm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIpaE0Zm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIpaE0Zm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIpaE0Zm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIpaE0Zm\App_KernelDevDebugContainer([
    'container.build_hash' => 'IpaE0Zm',
    'container.build_id' => 'f9f83a33',
    'container.build_time' => 1713728165,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIpaE0Zm');