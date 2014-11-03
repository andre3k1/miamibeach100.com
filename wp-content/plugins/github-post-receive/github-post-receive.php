<?php

// tutorial: http://behindcompanies.com/2014/01/a-simple-script-for-deploying-code-with-githubs-webhooks/

$LOCAL_ROOT         = "/var/www/vhosts/gsnb-kgxx.accessdomain.com";
$LOCAL_REPO_NAME    = "httpdocs";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:andre3k1/miamibeach100.com.git";
$BRANCH             = "master";

if ( $_POST['payload'] ) {

  if( file_exists($LOCAL_REPO) ) {

    // If the repo exists, git pull
    shell_exec("cd {$LOCAL_REPO} && git pull");

    die("done " . mktime());
  } else {

    // If the repo does not exist, git clone
    shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO}");

    die("done " . mktime());
  }
}

?>
