<?php
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/course/moodleform_mod.php');

class mod_helloworld_mod_form extends moodleform_mod {
    public function definition() {
        $mform = $this->_form;
        
        // Displaying activity image in the form
        $imgsrc = new moodle_url('/mod/helloworld/pix/icon.png');
        $mform->addElement('html', '<div><img src="'.$imgsrc.'" alt="Hello World Icon" style="width: 100px; height: 100px;"/></div>');
        
        $mform->addElement('header', 'general', get_string('general', 'form'));
        $mform->addElement('text', 'name', get_string('helloworldname', 'helloworld'), array('size'=>'64'));
        
        $this->standard_coursemodule_elements();
        $this->add_action_buttons();
    }
}
