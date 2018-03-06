<?php


defined('MOODLE_INTERNAL') || die;
if ($hassiteconfig) {

    $url = new moodle_url('/local/sandbox/index.php');
    $cap = 'moodle/site:config';
    $ADMIN->add('reports', new admin_externalpage('localsandbox', get_string('pagetitle', 'local_sandbox'), $url, $cap));


}