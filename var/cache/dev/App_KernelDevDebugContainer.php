<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container93WcHQW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container93WcHQW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container93WcHQW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container93WcHQW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container93WcHQW\App_KernelDevDebugContainer([
    'container.build_hash' => '93WcHQW',
    'container.build_id' => 'dce69f94',
    'container.build_time' => 1681377554,
], __DIR__.\DIRECTORY_SEPARATOR.'Container93WcHQW');
