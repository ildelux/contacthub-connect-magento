<?php
$installer = $this;
$installer->startSetup();

$installer->run("
ALTER TABLE {$installer->getTable("contactlab_hubcommons/task")}
    CHANGE `task_data` `task_data` blob comment 'Task internal data';
");

$installer->endSetup();
