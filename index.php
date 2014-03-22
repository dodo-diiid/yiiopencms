<?php

$environment = require_once(dirname(__FILE__).'/environment.php');

$config = dirname(__FILE__) . "/protected/config/frontend/{$environment}.php";
$yii = '/opt/framework/yii.php';

require_once($yii);

Yii::createWebApplication($config)->runEnd('frontend');