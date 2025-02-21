<?php // Plugin Functions
function course_certificate_add_course_certificate($code,$name, $dob, $event, $duration, $role,  $notes, $view, $editid){
	global $wpdb;
    if( is_numeric($editid) && $editid != '' ) {
        $result = $wpdb->update('course_certificates', array(
            'certificate_code' => $code,
            'student_name' => $name,
            'duration'  => $duration,
            'event' => $event,
            'dob' => $dob,
            'role' => $role,
            'notes' => $notes,
            'view' => $view,
            ),
            array( 'id' => $editid )
        );
    } else {
        $result = $wpdb->insert('course_certificates', array(
            'certificate_code' => $code,
            'student_name' => $name,
            'dob' => $dob,
            'event'  => $event,
            'duration' => $duration,
            'role' => $role,
            'notes' => $notes,
            'view' => $view,
            )
        );
    }
    return $result;
}

function course_certificate_delete_course_certificate($editid) {
    global $wpdb;
    $result = false;
    if( is_numeric($editid) && $editid != '' ) {
        $result = $wpdb->delete('course_certificates', array( 'id' => $editid ));
    }
    return $result;
}