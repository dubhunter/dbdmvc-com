<?php
/**
 * index.php :: dbdMVC Bootstrap Sample File
 *
 * @package dbdMVC
 * @version 1.3
 * @author Don't Blink Design <info@dontblinkdesign.com>
 * @copyright Copyright (c) 2006-2008 by Don't Blink Design
 */
define("DBD_DOC_ROOT", dirname(__FILE__));
define("DBD_APP_DIR", realpath(DBD_DOC_ROOT."/../dbdApp")."/");
define("DBD_MVC_DIR", "/var/www/dbdMVC2/");

require_once(DBD_MVC_DIR."dbdMVC.php");

/**
 * Add paths to dbdLoader.
 */
//dbdLoader::addPath(realpath(DBD_APP_DIR."common"));

/**
 * Allow phpinfo() call via dbdInfo.
 */
dbdMVC::exposePHPInfo();

/**
 * Set dbdMVC debug mode.
 * <b>Options:</b>
 * <ul>
 * 		<li>DBD_DEBUG_ALL</li>
 * 		<li>DBD_DEBUG_DB</li>
 * 		<li>DBD_DEBUG_HTML</li>
 * 		<li>DBD_DEBUG_CSS</li>
 * 		<li>DBD_DEBUG_JS</li>
 * </ul>
 * <b>Note:</b> can be combined using <code>DBD_DEBUG_CSS | DBD_DEBUG_JS</code>
 */
//dbdMVC::setDebugMode(DBD_DEBUG_ALL);

dbdRequest::addRewrite('#^(.+\.css)$#i', '/dbdCSS/combine/?files=$1');

/**
 * Run dbdMVC application.
 */
dbdMVC::run(DBD_APP_DIR);

/**
 * Log execution time of dbdMVC.
 */
//dbdMVC::logExecutionTime();
?>

