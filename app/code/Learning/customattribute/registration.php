<?php
//here type is what we are registering whether it is module or theme etc.
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Learning_customattribute',
    __DIR__
);