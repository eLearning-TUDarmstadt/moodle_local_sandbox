<?php

require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/version.php');

$COM = $plugin->component;

$title = get_string('pagetitle', $COM);
$pagetitle = get_string('pagetitle', $COM);


// Set up the page.
$url = new moodle_url("/local/sandbox/index.php");
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($title);
$PAGE->set_heading($title);

$output = $PAGE->get_renderer($COM);

echo $output->header();

$page = new \local_sandbox\output\index_page();
echo $output->render($page);

echo $output->footer();