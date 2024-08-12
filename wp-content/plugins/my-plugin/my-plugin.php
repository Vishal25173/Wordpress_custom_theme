<?php 


/**
 * Plugin Name: My plugin
 * Description: This is test plugin
 * Version:1.1
 * Author:Vishal
 * Author URI:https://itsweb.in
 */



// header 
 if(!defined('ABSPATH')){
    header("Location: /wow");
    die("");
 }






// // activation plugin 
//  function my_plugin_activation(){
//    global $wpdb, $table_prefix;
//    $wp_emp = $table_prefix.'emp';

//    $q = "CREATE TABLE IF NOT EXISTS `$wp_emp` (`ID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(10) NOT NULL , `class` BOOLEAN NOT NULL , `subject` TEXT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";

//    $wpdb->query($q);
// // inserting data 
//    // $q ="INSERT INTO `$wp_emp` ( `name`, `class`, `subject`) VALUES ('ijocjvn', 12, 'sldmkfcvjn');";
//    // $wpdb->query($q);

//    // and second option for inserting data 
// // $data = array(
// // 'name' => 'akshay',
// // 'class'=> '10',
// // 'subject' => 'jghds'

// // );
// // $wpdb->insert($wp_emp, $data);
//  }
//  register_activation_hook(__FILE__,'my_plugin_activation');


// // deactivation plugin 
//  function my_plugin_deactivation(){
//    // drop table 
// // global $wpdb, $table_prefix;
// // $wp_emp = $table_prefix.'emp';

// //    $q = " DROP TABLE `$wp_emp`";

// //    $wpdb->query($q);

// // truncate table 
// // global $wpdb, $table_prefix;
// //  $wp_emp = $table_prefix.'emp';

// //     $q = "TRUNCATE TABLE `$wp_emp`";

// //     $wpdb->query($q);


// }
//  register_deactivation_hook(__FILE__,'my_plugin_deactivation');


// //  short code 
//  function my_sc_fun(){
//    return 'Function Call';
// }
// add_shortcode('my_sc', 'my_sc_fun');




// select query and wp_query 
function wowform(){
   global $wpdb, $table_prefix;
    $wp_emp = $table_prefix.'emp';
   
    $q = "SELECT * FROM '$wp_emp';";
    $results = $wpdb->get_results($q);
   
    print_r($results);
   
   }
add_shortcode('wowform', 'wowform');

?>