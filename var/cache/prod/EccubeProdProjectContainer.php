<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEuf2hfu\EccubeProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEuf2hfu/EccubeProdProjectContainer.php') {
    touch(__DIR__.'/ContainerEuf2hfu.legacy');

    return;
}

if (!\class_exists(EccubeProdProjectContainer::class, false)) {
    \class_alias(\ContainerEuf2hfu\EccubeProdProjectContainer::class, EccubeProdProjectContainer::class, false);
}

return new \ContainerEuf2hfu\EccubeProdProjectContainer([
    'container.build_hash' => 'Euf2hfu',
    'container.build_id' => 'b3ccd1ee',
    'container.build_time' => 1599121612,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEuf2hfu');
