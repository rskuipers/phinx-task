<?php

$recipe = new \Soy\Recipe();

$recipe->prepare(\Soy\Phinx\PhinxConfig::class, function (\Soy\Phinx\PhinxConfig $phinxConfig) {
    return $phinxConfig
        ->setBinary('./vendor/bin/phinx')
        ->setConfigurationFile('app/config/phinx.yml');
});

$recipe->component('default', function (\Soy\Phinx\PhinxMigrateTask $phinxMigrateTask) {
    $phinxMigrateTask
        ->setVerbose(true)
        ->run();
});

return $recipe;
