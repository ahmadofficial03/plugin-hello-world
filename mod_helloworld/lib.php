<?php
function helloworld_add_instance($helloworld) {
    global $DB;
    $helloworld->timecreated = time();
    return $DB->insert_record('helloworld', $helloworld);
}

function helloworld_update_instance($helloworld) {
    global $DB;
    $helloworld->timemodified = time();
    $helloworld->id = $helloworld->instance;
    return $DB->update_record('helloworld', $helloworld);
}

function helloworld_delete_instance($id) {
    global $DB;
    $DB->delete_records('helloworld', array('id' => $id));
    return true;
}