<?php
/*
Plugin Name: cv-emails
Description: In order to looking for emails.
Author: Solene
Version: 1.0
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'admin_menu', 'cv_emails_menu');

function cv_emails_menu() {
    add_menu_page( 'CV Emails', 'recuperation donnes', 'manage_options', 'emails-menu', 'add_emails' );
}

function add_emails() {
    global $wpdb;
    echo '<p>Emails will be there</p>';
    $mymails = $wpdb->get_results( "SELECT email FROM wp_email" );
    foreach ( $mymails as $mymail ) {
    	echo '<p>'.$mymail->email.'</p>';
        echo '<button>Exporter les emails</button>';
    };
}
// function CSV_GENERATE($getTable) {
//     global $wpdb;
//
//     $FileName = "_export.csv";
//     $file = fopen($FileName,"w");
//
//     $sql = mysql_query("SELECT email FROM wp_email");
//     $row = mysql_fetch_assoc($sql);
//     // Save headings alon
//     	$HeadingsArray=array();
//     	foreach($row as $name => $value){
//     		$HeadingsArray[]=$name;
//     	}
//     	fputcsv($file,$HeadingsArray);
//
// // Save all records without headings
//
// 	while($row = mysql_fetch_assoc($sql)){
// 	$valuesArray=array();
// 		foreach($row as $name => $value){
// 		$valuesArray[]=$value;
// 		}
// 	fputcsv($file,$valuesArray);
// 	}
// 	fclose($file);
//
// header("Location: $FileName");
//
// echo "Complete Record saves as CSV in file: <b style=\"color:red;\">$FileName</b>";
 ?>
