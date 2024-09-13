<?php
require('../../config.php');
require_once('lib.php');

$id = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('helloworld', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);

require_login($course, true, $cm);

$PAGE->set_url('/mod/helloworld/view.php', array('id' => $cm->id));
$PAGE->set_title(format_string($cm->name));
$PAGE->set_heading(format_string($course->fullname));

echo $OUTPUT->header();
echo $OUTPUT->heading(format_string($cm->name));

// Add JavaScript for popup
$PAGE->requires->js_init_code("
    require(['jquery'], function($) {
        $(document).ready(function() {
            alert('Hello World');
        });
    });
");

echo $OUTPUT->footer();