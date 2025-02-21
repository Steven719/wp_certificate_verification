<?php
//Exit if file called directly
if (! defined( 'ABSPATH' )) { 
    exit; 
}


function course_certificate_segwitz_certificate_onActivation(){
	global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $create_table_query = "
    CREATE TABLE IF NOT EXISTS `course_certificates` (
        id INTEGER NOT NULL AUTO_INCREMENT,
        student_name TEXT NOT NULL,
        dob TEXT NOT NULL,
        event TEXT NOT NULL,
        duration TEXT NOT NULL,
        certificate_code TEXT NOT NULL,
        role TEXT,
        notes TEXT,
        view TEXT,
        PRIMARY KEY (id)
    )$charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $create_table_query );
}