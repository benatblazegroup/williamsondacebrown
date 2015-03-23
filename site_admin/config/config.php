<?php
    define('PERCH_LICENSE_KEY', 'P21503-BPS782-DDW552-GXR657-FJW018');

    define("PERCH_DB_USERNAME", 'admin-wdb');
    define("PERCH_DB_PASSWORD", '+a:DH}35}q,:,7w');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "admin_wdb");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'webmaster@blazegroup.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Blaze Development');

    define('PERCH_LOGINPATH', '/williamsondacebrown/site_admin');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
