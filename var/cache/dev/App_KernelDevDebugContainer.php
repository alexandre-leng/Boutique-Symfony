<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQZh1Uup\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQZh1Uup/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQZh1Uup.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQZh1Uup\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQZh1Uup\App_KernelDevDebugContainer([
    'container.build_hash' => 'QZh1Uup',
    'container.build_id' => '8ecb5f54',
    'container.build_time' => 1611672024,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQZh1Uup');
