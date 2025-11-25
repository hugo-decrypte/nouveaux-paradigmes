<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$mapping_path = [__DIR__ . '/../infrastructure/mapping/'];
$isDevMode=true;
$dbParams = parse_ini_file(__DIR__ . '/../config/conf.ini');
$config = ORMSetup::
createXMLMetadataConfiguration($mapping_path, $isDevMode);
$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);