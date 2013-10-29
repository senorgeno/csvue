<?php

global $project;
$project = 'csvue';

global $database;
$database = 'csvue';
require_once('conf/ConfigureFromEnv.php');

//global $databaseConfig;
//$databaseConfig = array(
//	"type" => "MySQLDatabase",
//	"server" => "localhost",
//	"username" => "root",
//	"password" => "root",
//	"database" => "csvue",
//	//"database" => "iconicDev"
//);
//Security::setDefaultAdmin("admin", "admin");;

MySQLDatabase::set_connection_charset('utf8');

// Set the current theme. More themes can be downloaded from
// http://www.silverstripe.org/themes/
SSViewer::set_theme('csvue');
SiteConfig::add_extension('SiteConfig','SiteConfigDecorator');
BlogEntry::add_extension('BlogEntry', 'BlogEntryExtension');
BlogHolder::add_extension('BlogHolder','BlogHolderExtension');

// Set the site locale
i18n::set_locale('en_GB');

// Enable nested URLs for this site (e.g. page/sub-page/)
if (class_exists('SiteTree')) SiteTree::enable_nested_urls();

GD::set_default_quality(100);

MollomServer::setPublicKey('8552c5e28b0d2252f7ae0e0194258563');
MollomServer::setPrivateKey('335e269575c42e9c942e5ae207d5f56b');
SpamProtectorManager::set_spam_protector('MollomSpamProtector');