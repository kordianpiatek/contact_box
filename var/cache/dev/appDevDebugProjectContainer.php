<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLlipnyn\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLlipnyn/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLlipnyn.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLlipnyn\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerLlipnyn\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Llipnyn',
    'container.build_id' => 'bc2f02c1',
    'container.build_time' => 1526379232,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLlipnyn');
