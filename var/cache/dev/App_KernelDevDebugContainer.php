<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRM3zSil\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRM3zSil/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRM3zSil.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRM3zSil\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRM3zSil\App_KernelDevDebugContainer([
    'container.build_hash' => 'RM3zSil',
    'container.build_id' => '8f146ca1',
    'container.build_time' => 1681379477,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRM3zSil');
