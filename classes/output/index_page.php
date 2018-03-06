<?php

namespace local_sandbox\output;

use renderable;
use templatable;
use renderer_base;
use stdClass;

class index_page implements renderable, templatable {

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @return stdClass
     */
    public function export_for_template(renderer_base $output) {

        global $DB;

        $users = $DB->get_records('user', null, '', 'id, username, firstname, lastname, email');

        $data = new stdClass();
        $data->users = array_values($users);

        return $data;
    }
}