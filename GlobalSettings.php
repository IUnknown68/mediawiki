<?php
# This file was automatically generated by the MediaWiki 1.30.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$IP = "/var/www/apps/wiki";

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Mathias J. Seib";
$wgMetaNamespace = "Mathias_J._Seib";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgArticlePath = "/wiki/$1";
$wgUsePathInfo = TRUE;

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/mjs.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "arne28@seiberspace.de";
$wgPasswordSender = "wiki@mathiasjseib.de";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBuser = "mjs_wiki";
$wgDBpassword = "fkPqb5FO5GbNQ6rP";
$wgSharedDB = $wgDBname = "mjs_wiki_shared";
$wgSharedPrefix = 'shared_';
$wgSharedTables[] = 'interwiki';
$wgSharedTables[] = 'user_groups';

# MySQL specific settings

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "239b7eaaf097e13a339ee17956af549905cf17b2a03c9eac6c60fb7096ee8ae5";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "36335c58f9ce7388";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['read'] = false;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'CologneBlue' );
wfLoadSkin( 'Modern' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );


# End of automatically generated settings.
# Add more configuration options below.

wfLoadExtension( 'Poem' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'Poem' );
//require_once( "$IP/extensions/MarkdownExtraParser/MarkdownExtraParser.php" );
wfLoadExtension( 'MobileFrontend' );
//wfLoadExtension( 'MjsPicture' );
require_once ("$IP/extensions/MjsPicture/MjsPicture.php");

# Enables use of WikiEditor by default but still allow users to disable it in preferences
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;

# Displays the Preview and Changes tabs
$wgDefaultUserOptions['wikieditor-preview'] = 1;

# Displays the Publish and Cancel buttons on the top right side
$wgDefaultUserOptions['wikieditor-publish'] = 1;

$wgAllowExternalImages = true;

$actions = array( 'edit', 'watch', 'unwatch', 'delete','revert', 'rollback',
  'protect', 'unprotect', 'markpatrolled', 'render', 'submit', 'history', 'purge', 'info' );
foreach ( $actions as $action ) {
  $wgActionPaths[$action] = "/wiki/$1/$action";
}
$wgArticlePath = $wgActionPaths['view'] = "/wiki/$1";
$wgJobRunRate = 0;
$wgGroupPermissions['sysop']['interwiki'] = true;
$wgCookieDomain = 'wiki.mathiasjseib.de';

$wgUploadNavigationUrl = "https://pool.wiki.mathiasjseib.de/wiki/Special:Upload";
$wgUploadMissingFileUrl= "https://pool.wiki.mathiasjseib.de/wiki/Special:Upload";
$wgUploadDirectory = "/var/www/vhosts/pool.wiki.mathiasjseib.de/images";
$wgSharedUploadPath = "https://pool.wiki.mathiasjseib.de/images";
$wgSharedUploadDirectory = "/var/www/vhosts/pool.wiki.mathiasjseib.de/images/";
$wgUseSharedUploads = true;
$wgHashedSharedUploadDirectory = true;

$wgMFAutodetectMobileView = true;
$wgMFDefaultSkinClass = 'SkinVector';
