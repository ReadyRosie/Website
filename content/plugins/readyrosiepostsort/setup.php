<?php
/*
Plugin Name: readyrosiepostsort
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: The Plugin's Version Number, e.g.: 1.0
Author: Name Of The Plugin Author
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	require_once(ABSPATH . WPINC . '/pluggable.php');
	
	$htmlemail='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
<style type="text/css">
.red {
	color: #FF0000;
}
.red {
	color: #FF0000;
}
</style>
</head>

<body>

<table align="center" bgcolor="#ffffff" width="600" border="0" cellspacing="0" cellpadding="0" style="padding:0px;font-size:18px;color:#333333;font-family:Verdana, Geneva, sans-serif;">
  <tr>
    <td>
    	<!--------- inner table 1 ---------->
        	<!--------- header ---------->
    	<table width="600" border="0" cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;">
  			<tr>
    			<td align="left" width="600" style="margin:0px;padding:0px;">
    				<a href="http://www.readyrosie.com/" target="_blank"><img src="http://gallery.mailchimp.com/9ab3e06e1069c5d313b3ca1a9/images/logo.jpg" width="348" height="92" alt="Ready Rosie" title="Ready Rosie"></a>
    			</td>
  			</tr>
		</table>
        <!--------- inner table 2 ---------->
              <!-------- body --------->
    	<table width="600" border="0" cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;">
      		<tr>
        		<td width="600" height="699" bgcolor="#333333" background="http://gallery.mailchimp.com/9ab3e06e1069c5d313b3ca1a9/images/bgChalkTall.jpg" style="margin:0px;padding:0px;">
                	<table width="600" border="0" cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;">
  						<tr>
    						<td width="600" height="30px" style="margin:0px; padding:0px; font-family: Verdana, Geneva, sans-serif;">&nbsp;</td>
					  </tr>
					</table>
                    <table width="600" border="0" cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;">
  						<tr>
    						<td width="30" height="540" style="margin:0px;padding:0px;">&nbsp;</td>
                            <td align="center" width="540" height="540" bgcolor="#ffffff" style="margin:0px;padding:0px;">
                            	<table align="center" width="540" border="0" cellspacing="10" cellpadding="0" style="margin:0px;padding:0px;">
                                    <tr>
                                    	<td width="500" style="margin:0px;padding:0px;">
                                        	<img src="http://gallery.mailchimp.com/9ab3e06e1069c5d313b3ca1a9/images/todaysVideo.png" width="183" height="17" alt="Today\'s Video" title="Today\'s Video">
                                        	{todaysvideotitle}
                                        </td>
                                  </tr>
                                    <tr>
                                        <td width="500" height="281" bgcolor="#cccccc" style="margin:0px;padding:0px;border:10px solid #333333;">
                                            <a href="{todaysvideolink}" target="_blank"><img src="{todaysvideoimg}" width="500" height="281" alt="Ready Rosie: Daily Video" title="Ready Rosie: Daily Video"></a>
                                        </td>
                                    </tr>
                                </table>
                                <table align="center" width="500" border="0" cellspacing="0" cellpadding="0">
                                	<tr>
                                    	<td width="500" style="margin:0px; padding:0px; text-align: center; font-family: Verdana, Geneva, sans-serif;"><em>
                                        <strong>The Expert & your daily video in Spanish</strong></em>
                                        </td>
                                  </tr>
                                </table>
                                <table align="center" width="500" border="0" cellspacing="10" cellpadding="0" style="margin:0px;padding:0px;">
                                	<tr>
                                    	<td width="235" height="132" bgcolor="#cccccc" style="margin:0px;padding:0px;border:10px solid #333333;">
                            	<a href="{expertvideolink}" target="_blank">
                                <img src="{expertvideoimg}" width="235" height="132" alt="The Expert" title="Expert Video"></a>
                            			</td>
                                        <td width="235" height="132" bgcolor="#cccccc" style="margin:0px;padding:0px;border:10px solid #333333;">
                            	<a href="{spanishvideolink}" target="_blank"><img src="{spanishvideoimg}" width="235" height="132" alt="Spanish Video" title="Spanish Video"></a>
                            			</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="30" height="540" style="margin:0px;padding:0px;">&nbsp;</td>
  						</tr>
					</table>
                    
                    <table width="600" border="0" cellspacing="0" cellpadding="0" style="margin:0px;padding:0px;">
  						<tr>
    						<td width="540" align="center" style="margin:0px;padding:0px;font-size:12px;color:#ffffff;font-family:Verdana, Geneva, sans-serif;">
                            	<p>ReadyRosie is the first and only online school readiness curriculum, which makes high quality preK accessible to all.</p>
                            </td>
  						</tr>
					</table>
                </td>
      		</tr>
    	</table>
	</td>
  </tr>
</table>


                        <center>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <table border="0" cellpadding="20" cellspacing="0" width="100%" style="background:#EEEEEE  !important; border-top:1px solid #DDDDDD; clear:both;" id="canspamBarWrapper">
                                        <tr>
                                                <td align="center" valign="top" style="padding-bottom:0;">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="canspamBar">
                                                                <tr>
                                                                    <td align="left" valign="top" style="color:#505050 !important;font-family:Verdana,Arial,Sans !important;font-size:11px !important;font-weight:normal !important;font-style:normal !important;text-decoration:none !important;vertical-align:top !important;text-align:left !important;">
                                                                        Sent to *|EMAIL|* &mdash; <a href="*|ABOUT_LIST|*" style="font-family:Verdana,Arial,Sans !important;font-size:11px !important;font-weight:normal !important;font-style:normal !important;text-decoration:underline !important;color:#404040 !important;"><em>why did I get this?</em></a>
                                                                                <br>
                                                                                <a href="*|UNSUB|*" style="font-family:Verdana,Arial,Sans !important;font-size:11px !important;font-weight:normal !important;font-style:normal !important;text-decoration:none !important;color:#369 !important;">unsubscribe from this list</a> |
                                                                        <a href="*|UPDATE_PROFILE|*" style="font-family:Verdana,Arial,Sans !important;font-size:11px !important;font-weight:normal !important;font-style:normal !important;text-decoration:none !important;color:#369 !important;">update subscription preferences</a>
                                                                        <br>
                                                                        *|LIST:ADDRESSLINE|*
                                                                    </td>
                                                                        <td align="left" valign="top">
                                                                                *|REWARDS|*<br>&nbsp;
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                </td>
                                        </tr>
                                </table>
</center></body>
</html>';

$textemail='[1]Ready Rosie
  Links:
    1. http://www.readyrosie.com


[2]Today\'s Video {todaysvideotitle}
[3]Dr. Jane Moore 
[4]Spanish Video 
  Links:
    2. {todaysvideolink}
    3. {expertvideolink}
    4. {spanishvideolink}

ReadyRosie is the first and only online school readiness curriculum,
which makes high quality preK accessible to all.

Sent to *|EMAIL|* — [5]why did I get this?
[6]unsubscribe from this list | [7]update subscription preferences
*|LIST_ADDRESSLINE_TEXT|* *|REWARDS_TEXT|*
  Links:
    5. *|ABOUT_LIST|*
    6. *|UNSUB|*
    7. *|UPDATE_PROFILE|*';

	function isWeekend($date) {
	    $weekDay = date('w', strtotime($date));
	    return ($weekDay == 0 || $weekDay == 6);
	}
	
	function rrPostSort_GetNextVideo () {
    	global $wpdb;
    	$table_name = $wpdb->prefix . "rrPostSort";
    	$lastpostrow = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table_name where marker=1" ) );
		if ($lastpostrow) $lastpostsort=$lastpostrow->sort;
		else $lastpostsort=0;
		$nextpostrow=$wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table_name where sort > $lastpostsort order by sort asc LIMIT 1" ) );
		if (!$nextpostrow) $nextpostrow=$wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table_name where sort > 0 order by sort asc LIMIT 1" ) );
		
		if ($lastpostrow) $sql="update $table_name set marker=0 where id=$lastpostrow->id";
		$wpdb->query($sql);
		$sql="update $table_name set marker=1 where id=$nextpostrow->id ";
		$wpdb->query($sql);
		return $nextpostrow;
	}
	
	function rrPostSort_GetCurrentVideo() {
		global $wpdb;
    	$table_name = $wpdb->prefix . "rrPostSort";
    	$lastpostrow = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table_name where marker=1" ) );
		return $lastpostrow;
	}

	function rrPostSort_CopySendCampaign($videorow) {
		global $htmlemail;
		global $textemail;
		
		$htmlemail=str_replace('{todaysvideoimg}',get_post_meta($videorow->postid, 'wpcf-video',true),$htmlemail);
		$htmlemail=str_replace('{todaysvideolink}',get_permalink($videorow->postid),$htmlemail);
		$htmlemail=str_replace('{todaysvideotitle}',get_the_title($videorow->postid),$htmlemail);
		$htmlemail=str_replace('{expertvideoimg}',get_post_meta($videorow->post2id, 'wpcf-video',true),$htmlemail);
		$htmlemail=str_replace('{expertvideolink}',get_permalink($videorow->post2id),$htmlemail);
		$htmlemail=str_replace('{spanishvideoimg}',get_post_meta($videorow->post3id, 'wpcf-video',true),$htmlemail);
		$htmlemail=str_replace('{spanishvideolink}',get_permalink($videorow->post3id),$htmlemail);
		
		$textemail=str_replace('{todaysvideoimg}',get_post_meta($videorow->postid, 'wpcf-video',true),$textemail);
		$textemail=str_replace('{todaysvideolink}',get_permalink($videorow->postid),$textemail);
		$textemail=str_replace('{todaysvideotitle}',get_the_title($videorow->postid),$textemail);
		$textemail=str_replace('{expertvideoimg}',get_post_meta($videorow->post2id, 'wpcf-video',true),$textemail);
		$textemail=str_replace('{expertvideolink}',get_permalink($videorow->post2id),$htmlemail);
		$textemail=str_replace('{spanishvideoimg}',get_post_meta($videorow->post3id, 'wpcf-video',true),$textemail);
		$textemail=str_replace('{spanishvideolink}',get_permalink($videorow->post3id),$textemail);
		
		require_once (ABSPATH .'wp-content/plugins/readyrosiepostsort/MCAPI.class.php');
		$api = new MCAPI('264fd6ce3af9715e32d9f0ac0d421e58-us5');
		$title=get_the_title($videorow->postid);
		//echo $textemail;
		$retval = $api->campaignCreate('regular',
			array(
				subject=>"Today's ReadyRosie Video - " . $title, 
				list_id=>'7bdf584c94',
				from_name=>'ReadyRosie',
				to_name=>'*|FNAME|*',
				from_email=>'info@readyrosie.com',
				title=>'Production Campaign'
			),
			array(
				'html'=>$htmlemail,'text'=>$textemail)
			);

		//echo $retval;
		$retval = $api->campaignSendNow($retval);
		if ($api->errorCode){
			echo "Unable to Replicate Campaign!";
			echo "\n\tCode=".$api->errorCode;
			echo "\n\tMsg=".$api->errorMessage."\n";
		} 
	}

	function cron(){
		if (!isWeekend(date("Y-m-d"))) {
			$videorow=rrPostSort_GetNextVideo ();
			rrPostSort_CopySendCampaign($videorow);
		}
	}
	
	function dailyvideo() {
		global $wpdb; 
		$currentvideo=rrPostSort_GetCurrentVideo();
		wp_redirect(get_permalink( $currentvideo->postid ));
		exit;
	}
	
	function dailyvideo2() {
		global $wpdb; 
		$currentvideo=rrPostSort_GetCurrentVideo();
		wp_redirect(get_permalink( $currentvideo->post2id ));
		exit;
	}
	
	function dailyvideo3() {
		global $wpdb; 
		$currentvideo=rrPostSort_GetCurrentVideo();
		wp_redirect(get_permalink( $currentvideo->post3id ));
		exit;
	}
	
	
	
	
   if ( $_GET['wpcron1']) {
		$file = fopen("test.txt","w+");  	
		if (flock($file,LOCK_EX)) {
 			$now = microtime(true);
			echo $now - get_option('last_do_work_time') ;
			if ( ($now - get_option('last_do_work_time')) > 600 ) { # less than 3 seconds
			echo 'in';
		  		update_option('last_do_work_time',$now);
				echo 'before cron';
			    cron();
				echo 'out';
	   		}
	   		flock($file,LOCK_UN);
	   	}
	}
	
	if ($_GET['dailyvideo']) dailyvideo();
	if ($_GET['dailyvideo2']) dailyvideo2();
	if ($_GET['dailyvideo3']) dailyvideo3();
?>