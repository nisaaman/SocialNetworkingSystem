
<?php
$con=mysql_connect("localhost","root","");
	if(!$con)
		{
		die("could not connect: ".mysql_error());
		}

    if(mysql_query("DROP DATABASE socialmediapstu",$con))
		{
		echo" Database droped";
		}
	

	if(mysql_query("CREATE DATABASE socialmediapstu",$con))
		{
		echo" Database Created";
		}
	else
		{
		echo"Error creating database" .mysql_error();
	
		}


   echo " creating database";      

   $db="socialmediapstu";



   /*...........Table structure for table `se_actions`..............*/

$con=mysql_connect("localhost","root","");
mysql_select_db("$db",$con);
$sql= "CREATE TABLE IF NOT EXISTS `se_actions` (
  `action_id` int(9) NOT NULL auto_increment,
  `action_actiontype_id` int(9) NOT NULL default '0',
  `action_date` int(14) NOT NULL default '0',
  `action_user_id` int(9) NOT NULL default '0',
  `action_icon` varchar(50) NOT NULL default '',
  `action_text` text NOT NULL,
  PRIMARY KEY  (`action_id`),
  KEY `action_user_id` (`action_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";

mysql_query($sql,$con);





   /*...........Table structure for table `se_actiontypes`..............*/




$sql= "CREATE TABLE IF NOT EXISTS `se_actiontypes` (
  `actiontype_id` int(9) NOT NULL auto_increment,
  `actiontype_name` varchar(50) NOT NULL default '',
  `actiontype_icon` varchar(50) NOT NULL default '',
  `actiontype_desc` varchar(250) NOT NULL default '',
  `actiontype_text` text NOT NULL,
  PRIMARY KEY  (`actiontype_id`),
  UNIQUE KEY `actiontype_name` (`actiontype_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ";

mysql_query($sql,$con);

 /*.........insert table values `se_actiontyps`..............*/

$sql="INSERT INTO `se_actiontypes` (`actiontype_id`, `actiontype_name`, `actiontype_icon`, `actiontype_desc`, `actiontype_text`) VALUES
(1, 'login', 'action_login.gif', 'When I log in.', '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; logged in.'),
(2, 'editphoto', 'action_editphoto.gif', 'When I update my profile photo.', '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; updated their profile photo.&lt;div style=&#039;padding: 10px 10px 10px 20px;&#039;&gt;&lt;a href=&#039;profile.php?user=[username]&#039;&gt;&lt;img src=&#039;[photo]&#039; border=&#039;0&#039;&gt;&lt;/a&gt;&lt;/div&gt;'),
(3, 'editprofile', 'action_editprofile.gif', 'When I update my profile.', '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; updated their profile.'),
(4, 'postcomment', 'action_postcomment.gif', 'When I post a comment on someone&#039;s profile.', '&lt;a href=&#039;profile.php?user=[username1]&#039;&gt;[username1]&lt;/a&gt; posted a comment on &lt;a href=&#039;profile.php?user=[username2]&#039;&gt;[username2]&lt;/a&gt;&#039;s profile:&lt;div style=&#039;padding: 10px 20px 10px 20px;&#039;&gt;[comment]&lt;/div&gt;'),
(5, 'addfriend', 'action_addfriend.gif', 'When I add a friend.', '&lt;a href=&#039;profile.php?user=[username1]&#039;&gt;[username1]&lt;/a&gt; and &lt;a href=&#039;profile.php?user=[username2]&#039;&gt;[username2]&lt;/a&gt; are now friends.'),
(6, 'signup', 'action_signup.gif', '', '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; signed up.'),
(7, 'editstatus', 'action_editstatus.gif', 'When I update my status.', '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; is [status]'),
(8, 'newalbum', 'action_newalbum.gif', 'When I create a new album.', '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; created a new album: &lt;a href=&#039;album.php?user=[username]&amp;album_id=[id]&#039;&gt;[title]&lt;/a&gt;'),
(9, 'newmedia', 'action_newmedia.gif', 'When I upload new photos.', '&lt;a href=&#039;profile.php?user=[username]&#039;&gt;[username]&lt;/a&gt; uploaded new photos to their album: &lt;a href=&#039;album.php?user=[username]&amp;album_id=[id]&#039;&gt;[title]&lt;/a&gt;'),
(10, 'mediacomment', 'action_postcomment.gif', 'When I post a comment about a photo.', '&lt;a href=&#039;profile.php?user=[username1]&#039;&gt;[username1]&lt;/a&gt; posted a comment on &lt;a href=&#039;profile.php?user=[username2]&#039;&gt;[username2]&lt;/a&gt;&#039;s &lt;a href=&#039;album_file.php?user=[username2]&amp;album_id=[albumid]&amp;media_id=[mediaid]&#039;&gt;photo&lt;/a&gt;:&lt;div style=&#039;padding: 10px 20px 10px 20px;&#039;&gt;[comment]&lt;/div&gt;');
";


mysql_query($sql,$con);


   /*...........Table structure for table `se_albums`..............*/



$sql= "CREATE TABLE IF NOT EXISTS `se_albums` (
  `album_id` int(9) NOT NULL auto_increment,
  `album_user_id` int(9) NOT NULL default '0',
  `album_datecreated` int(14) NOT NULL default '0',
  `album_dateupdated` int(14) NOT NULL default '0',
  `album_title` varchar(50) NOT NULL default '',
  `album_desc` text,
  `album_cover` int(9) NOT NULL default '0',
  `album_views` int(9) NOT NULL default '0',
  PRIMARY KEY  (`album_id`),
  KEY `INDEX` (`album_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
mysql_query($sql,$con);


/*...........Table structure for table `se_chatmessages`..............*/



$sql= "CREATE TABLE IF NOT EXISTS `se_chatmessages` (
  `chatmessage_id` int(12) NOT NULL auto_increment,
  `chatmessage_time` int(14) NOT NULL default '0',
  `chatmessage_user_username` varchar(50) NOT NULL default '',
  `chatmessage_content` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`chatmessage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1  ";
mysql_query($sql,$con);


/*...........Table structure for table `se_chatusers`..............*/



$sql= "CREATE TABLE IF NOT EXISTS `se_chatusers` (
  `chatuser_id` int(9) NOT NULL auto_increment,
  `chatuser_user_id` int(9) NOT NULL default '0',
  `chatuser_user_username` varchar(50) NOT NULL default '',
  `chatuser_lastupdate` int(14) NOT NULL default '0',
  `chatuser_user_photo` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`chatuser_id`),
  KEY `INDEX` (`chatuser_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
mysql_query($sql,$con);


/*...........Table structure for table `se_fields`..............*/

$sql= "CREATE TABLE IF NOT EXISTS `se_fields` (
  `field_id` int(9) NOT NULL auto_increment,
  `field_tab_id` int(9) NOT NULL default '0',
  `field_order` int(3) NOT NULL default '0',
  `field_title` varchar(100) NOT NULL default '',
  `field_desc` text,
  `field_error` varchar(250) NOT NULL default '',
  `field_type` int(1) NOT NULL default '0',
  `field_signup` int(1) NOT NULL default '0',
  `field_style` varchar(200) NOT NULL default '',
  `field_maxlength` int(3) NOT NULL default '0',
  `field_link` varchar(250) NOT NULL default '',
  `field_options` text,
  `field_browsable` int(1) NOT NULL default '0',
  `field_required` int(1) NOT NULL default '0',
  `field_regex` varchar(250) NOT NULL default '',
  `field_birthday` int(1) NOT NULL default '0',
  `field_html` varchar(250) NOT NULL default '',
  PRIMARY KEY  (`field_id`),
  KEY `INDEX` (`field_tab_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ";
mysql_query($sql,$con);

 /*.........insert table values `se_fields`..............*/

$sql="INSERT INTO `se_fields` (`field_id`, `field_tab_id`, `field_order`, `field_title`, `field_desc`, `field_error`, `field_type`, `field_signup`, `field_style`, `field_maxlength`, `field_link`, `field_options`, `field_browsable`, `field_required`, `field_regex`, `field_birthday`, `field_html`) VALUES
(1, 2, 7, 'Country', '', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(2, 2, 8, 'Phone Number', 'Ex: (888) 555-1234', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(3, 2, 9, 'Website URL', 'Ex: http://www.yoursite.com', '', 1, 1, '', 50, '[field_value]', '', 2, 0, '', 0, ''),
(4, 2, 6, 'Division', '', '', 1, 0, '', 50, '', '', 2, 0, '', 0, ''),
(5, 2, 5, 'City', '', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(6, 1, 3, 'Gender', '', '', 3, 1, '', 50, '', '0<!>Male<!>0<!>6<!><~!~>1<!>Female<!>1<!><~!~>', 2, 0, '', 0, ''),
(7, 2, 4, 'Street Address', '', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(8, 1, 1, 'Name', '', '', 1, 1, '', 50, '', '', 2, 0, '', 0, ''),
(9, 1, 2, 'Birthday', '', '', 5, 1, '', 50, '', '', 2, 0, '', 1, '')
";
mysql_query($sql,$con);

/*...........Table structure for table `se_friendexplains`..............*/


 $sql= "CREATE TABLE IF NOT EXISTS `se_friendexplains` (
  `friendexplain_id` int(9) NOT NULL auto_increment,
  `friendexplain_friend_id` int(9) NOT NULL default '0',
  `friendexplain_body` text,
  PRIMARY KEY  (`friendexplain_id`),
  KEY `friend_id` (`friendexplain_friend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
mysql_query($sql,$con);

/*...........Table structure for table `se_friend`..............*/



 $sql= "CREATE TABLE IF NOT EXISTS `se_friends` (
  `friend_id` int(9) NOT NULL auto_increment,
  `friend_user_id1` int(9) NOT NULL default '0',
  `friend_user_id2` int(9) NOT NULL default '0',
  `friend_status` int(1) NOT NULL default '0',
  `friend_type` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`friend_id`),
  KEY `INDEX` (`friend_user_id1`,`friend_user_id2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
mysql_query($sql,$con);

/*...........Table structure for table `se_levels`..............*/

 $sql= "CREATE TABLE IF NOT EXISTS `se_levels` (
  `level_id` int(9) NOT NULL auto_increment,
  `level_name` varchar(50) NOT NULL default '',
  `level_desc` text NOT NULL,
  `level_default` int(1) NOT NULL default '0',
  `level_signup` int(1) NOT NULL default '0',
  `level_message_allow` int(1) NOT NULL default '0',
  `level_message_inbox` int(3) NOT NULL default '0',
  `level_message_outbox` int(3) NOT NULL default '0',
  `level_profile_style` int(1) NOT NULL default '0',
  `level_profile_block` int(1) NOT NULL default '0',
  `level_profile_search` int(1) NOT NULL default '0',
  `level_profile_privacy` varchar(10) NOT NULL default '',
  `level_profile_comments` varchar(10) NOT NULL default '',
  `level_profile_status` int(1) NOT NULL default '0',
  `level_photo_allow` int(1) NOT NULL default '0',
  `level_photo_width` varchar(3) NOT NULL default '',
  `level_photo_height` varchar(3) NOT NULL default '',
  `level_photo_exts` varchar(50) NOT NULL default '',
  `level_album_allow` int(1) NOT NULL default '0',
  `level_album_maxnum` int(3) NOT NULL default '0',
  `level_album_exts` text NOT NULL,
  `level_album_mimes` text,
  `level_album_storage` bigint(11) NOT NULL default '0',
  `level_album_maxsize` bigint(11) NOT NULL default '0',
  `level_album_width` varchar(4) NOT NULL default '',
  `level_album_height` varchar(4) NOT NULL default '',
  `level_album_style` int(1) NOT NULL default '0',
  `level_album_search` int(1) NOT NULL default '0',
  `level_album_privacy` varchar(10) NOT NULL default '',
  `level_album_comments` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2";
mysql_query($sql,$con);

 /*.........insert table values `se_levels`..............*/
	 
$sql="INSERT INTO `se_levels` (`level_id`, `level_name`, `level_desc`, `level_default`, `level_signup`, `level_message_allow`, `level_message_inbox`, `level_message_outbox`, `level_profile_style`, `level_profile_block`, `level_profile_search`, `level_profile_privacy`, `level_profile_comments`, `level_profile_status`, `level_photo_allow`, `level_photo_width`, `level_photo_height`, `level_photo_exts`, `level_album_allow`, `level_album_maxnum`, `level_album_exts`, `level_album_mimes`, `level_album_storage`, `level_album_maxsize`, `level_album_width`, `level_album_height`, `level_album_style`, `level_album_search`, `level_album_privacy`, `level_album_comments`) VALUES
(1, 'Default Level', '', 1, 0, 1, 100, 50, 1, 1, 1, '012345', '0123456', 1, 1, '200', '200', 'jpg,jpeg,gif,png', 1, 10, 'jpg,gif,jpeg,png,bmp,mp3,mpeg,avi,mpa,mov,qt,swf', 'image/jpeg,image/pjpeg,image/jpg,image/jpe,image/pjpg,image/x-jpeg,image/x-jpg,image/gif,image/x-gif,image/png,image/x-png,image/bmp,audio/mpeg,video/mpeg,video/x-msvideo,video/avi,video/quicktime,application/x-shockwave-flash', 5242880, 2048000, '500', '500', 1, 1, '012345', '0123456');
";
mysql_query($sql,$con);

/*...........Table structure for table `se_media..............*/

 $sql= "CREATE TABLE IF NOT EXISTS `se_media` (
  `media_id` int(9) NOT NULL auto_increment,
  `media_album_id` int(9) NOT NULL default '0',
  `media_date` int(14) NOT NULL default '0',
  `media_title` varchar(50) NOT NULL default '',
  `media_desc` text,
  `media_ext` varchar(8) NOT NULL default '',
  `media_filesize` int(9) NOT NULL default '0',
  PRIMARY KEY  (`media_id`),
  KEY `INDEX` (`media_album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";
mysql_query($sql,$con);


 /*...........Table structure for table `se_mediacomments`..............*/


 $sql= "CREATE TABLE IF NOT EXISTS `se_mediacomments` (
  `mediacomment_id` int(9) NOT NULL auto_increment,
  `mediacomment_media_id` int(9) NOT NULL default '0',
  `mediacomment_authoruser_id` int(9) NOT NULL default '0',
  `mediacomment_date` int(14) NOT NULL default '0',
  `mediacomment_body` text,
  PRIMARY KEY  (`mediacomment_id`),
  KEY `INDEX` (`mediacomment_media_id`,`mediacomment_authoruser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
mysql_query($sql,$con);


/*...........Table structure for table `se_plugins`..............*/


 $sql= "CREATE TABLE IF NOT EXISTS `se_plugins` (
  `plugin_id` int(9) NOT NULL auto_increment,
  `plugin_name` varchar(100) NOT NULL default '',
  `plugin_version` varchar(4) NOT NULL default '',
  `plugin_type` varchar(30) NOT NULL default '',
  `plugin_desc` text NOT NULL,
  `plugin_icon` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`plugin_id`),
  UNIQUE KEY `plugin_type` (`plugin_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3";
mysql_query($sql,$con);

 /*.........insert table values `se_plugins`..............*/
	 
$sql="INSERT INTO `se_plugins` (`plugin_id`, `plugin_name`, `plugin_version`, `plugin_type`, `plugin_desc`, `plugin_icon`) VALUES
(1, 'Photo Album Plugin', '2.5', 'album', 'This plugin gives your users their own personal photo albums. These albums can be configured to store photos, videos, or any other file types you choose to allow. Users can interact by commenting on each others photos and viewing their friends'' recent updates.', 'album16.gif'),
(2, 'Chat Plugin', '2.2', 'chat', 'This plugin installs a live chatroom on your social network and adds a link to it on your users'' menu bar. Adding a chatroom is a great way to encourage members to interact more closely and form new connections.', 'chat16.gif');
";
mysql_query($sql,$con);

 /*........... Table structure for table `se_pms`..............*/

 $sql= "CREATE TABLE IF NOT EXISTS `se_pms` (
  `pm_id` int(9) NOT NULL auto_increment,
  `pm_user_id` int(9) NOT NULL default '0',
  `pm_authoruser_id` int(9) NOT NULL default '0',
  `pm_convo_id` int(9) NOT NULL default '0',
  `pm_date` int(14) NOT NULL default '0',
  `pm_subject` varchar(50) NOT NULL default '',
  `pm_body` text,
  `pm_status` int(1) NOT NULL default '0',
  `pm_outbox` int(1) NOT NULL default '0',
  PRIMARY KEY  (`pm_id`),
  KEY `INDEX` (`pm_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";
mysql_query($sql,$con);


 /*........... Table structure for table `se_profilecomments`..............*/

 $sql= "
CREATE TABLE IF NOT EXISTS `se_profilecomments` (
  `profilecomment_id` int(9) NOT NULL auto_increment,
  `profilecomment_user_id` int(9) NOT NULL default '0',
  `profilecomment_authoruser_id` int(9) NOT NULL default '0',
  `profilecomment_date` int(14) NOT NULL default '0',
  `profilecomment_body` text,
  PRIMARY KEY  (`profilecomment_id`),
  KEY `profilecomment_user_id` (`profilecomment_user_id`,`profilecomment_authoruser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1  ";
mysql_query($sql,$con);


 /*...........Table structure for table `se_profiles`..............*/

 $sql= "CREATE TABLE IF NOT EXISTS `se_profiles` (
  `profile_id` int(9) NOT NULL auto_increment,
  `profile_user_id` int(9) NOT NULL default '0',
  `profile_1` varchar(250) NOT NULL default '',
  `profile_2` varchar(250) NOT NULL default '',
  `profile_3` varchar(250) NOT NULL default '',
  `profile_4` varchar(250) NOT NULL default '',
  `profile_5` varchar(250) NOT NULL default '',
  `profile_6` int(2) NOT NULL default '0',
  `profile_7` varchar(250) NOT NULL default '',
  `profile_8` varchar(250) NOT NULL default '',
  `profile_9` int(14) NOT NULL default '0',
  PRIMARY KEY  (`profile_id`),
  KEY `INDEX` (`profile_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";
mysql_query($sql,$con);

 /*...........Table structure for table `se_settings`..............*/

 $sql= "CREATE TABLE IF NOT EXISTS `se_settings` (
  `setting_id` int(9) NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(20) NOT NULL DEFAULT '',
  `setting_url` int(1) NOT NULL DEFAULT '0',
  `setting_lang_default` varchar(50) NOT NULL DEFAULT '',
  `setting_lang_allow` int(1) NOT NULL DEFAULT '0',
  `setting_timezone` varchar(5) NOT NULL DEFAULT '',
  `setting_dateformat` varchar(20) NOT NULL DEFAULT '',
  `setting_timeformat` varchar(20) NOT NULL DEFAULT '',
  `setting_permission_profile` int(1) NOT NULL DEFAULT '0',
  `setting_permission_invite` int(1) NOT NULL DEFAULT '0',
  `setting_permission_search` int(1) NOT NULL DEFAULT '0',
  `setting_permission_portal` int(1) NOT NULL DEFAULT '0',
  `setting_banned_ips` text,
  `setting_banned_emails` text,
  `setting_banned_usernames` text,
  `setting_banned_words` text,
  `setting_comment_code` int(1) NOT NULL DEFAULT '0',
  `setting_connection_allow` int(1) NOT NULL DEFAULT '0',
  `setting_connection_framework` int(1) NOT NULL DEFAULT '0',
  `setting_connection_types` text,
  `setting_connection_other` int(1) NOT NULL DEFAULT '0',
  `setting_connection_explain` int(1) NOT NULL DEFAULT '0',
  `setting_signup_photo` int(1) NOT NULL DEFAULT '0',
  `setting_signup_enable` int(1) NOT NULL DEFAULT '0',
  `setting_signup_welcome` int(1) NOT NULL DEFAULT '0',
  `setting_signup_invite` int(1) NOT NULL DEFAULT '0',
  `setting_signup_invite_checkemail` int(1) NOT NULL DEFAULT '0',
  `setting_signup_invite_numgiven` int(3) NOT NULL DEFAULT '0',
  `setting_signup_invitepage` int(1) NOT NULL DEFAULT '0',
  `setting_signup_verify` int(1) NOT NULL DEFAULT '0',
  `setting_signup_code` int(1) NOT NULL DEFAULT '0',
  `setting_signup_randpass` int(1) NOT NULL DEFAULT '0',
  `setting_signup_tos` int(1) NOT NULL DEFAULT '0',
  `setting_signup_tostext` text,
  `setting_invite_code` int(1) NOT NULL DEFAULT '0',
  `setting_actions_showlength` int(14) NOT NULL DEFAULT '0',
  `setting_actions_actionsperuser` int(2) NOT NULL DEFAULT '0',
  `setting_actions_selfdelete` int(2) NOT NULL DEFAULT '0',
  `setting_actions_privacy` int(1) NOT NULL DEFAULT '0',
  `setting_actions_actionsonprofile` int(2) NOT NULL DEFAULT '0',
  `setting_actions_actionsinlist` int(2) NOT NULL DEFAULT '0',
  `setting_actions_visibility` int(1) NOT NULL DEFAULT '0',
  `setting_subnet_field1_id` int(9) NOT NULL DEFAULT '0',
  `setting_subnet_field2_id` int(9) NOT NULL DEFAULT '0',
  `setting_email_fromname` varchar(70) NOT NULL DEFAULT '',
  `setting_email_fromemail` varchar(70) NOT NULL DEFAULT '',
  `setting_email_invitecode_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_invitecode_message` text,
  `setting_email_invite_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_invite_message` text,
  `setting_email_verify_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_verify_message` text,
  `setting_email_newpass_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_newpass_message` text,
  `setting_email_welcome_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_welcome_message` text,
  `setting_email_lostpassword_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_lostpassword_message` text,
  `setting_email_friendrequest_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_friendrequest_message` text,
  `setting_email_message_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_message_message` text,
  `setting_email_profilecomment_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_profilecomment_message` text,
  `setting_permission_album` int(1) NOT NULL DEFAULT '0',
  `setting_email_mediacomment_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_mediacomment_message` text,
  `setting_chat_enabled` int(1) NOT NULL DEFAULT '0',
  `setting_chat_update` int(2) NOT NULL DEFAULT '0',
  `setting_chat_showphotos` int(1) NOT NULL DEFAULT '0',
  `setting_permission_blog` int(1) NOT NULL DEFAULT '0',
  `setting_email_blogcomment_subject` varchar(200) NOT NULL DEFAULT '',
  `setting_email_blogcomment_message` text,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2";
mysql_query($sql,$con);

 /*.........insert table value `se_settings`..............*/
$sql="INSERT INTO `se_settings` (`setting_id`, `setting_key`, `setting_url`, `setting_lang_default`, `setting_lang_allow`, `setting_timezone`, `setting_dateformat`, `setting_timeformat`, `setting_permission_profile`, `setting_permission_invite`, `setting_permission_search`, `setting_permission_portal`, `setting_banned_ips`, `setting_banned_emails`, `setting_banned_usernames`, `setting_banned_words`, `setting_comment_code`, `setting_connection_allow`, `setting_connection_framework`, `setting_connection_types`, `setting_connection_other`, `setting_connection_explain`, `setting_signup_photo`, `setting_signup_enable`, `setting_signup_welcome`, `setting_signup_invite`, `setting_signup_invite_checkemail`, `setting_signup_invite_numgiven`, `setting_signup_invitepage`, `setting_signup_verify`, `setting_signup_code`, `setting_signup_randpass`, `setting_signup_tos`, `setting_signup_tostext`, `setting_invite_code`, `setting_actions_showlength`, `setting_actions_actionsperuser`, `setting_actions_selfdelete`, `setting_actions_privacy`, `setting_actions_actionsonprofile`, `setting_actions_actionsinlist`, `setting_actions_visibility`, `setting_subnet_field1_id`, `setting_subnet_field2_id`, `setting_email_fromname`, `setting_email_fromemail`, `setting_email_invitecode_subject`, `setting_email_invitecode_message`, `setting_email_invite_subject`, `setting_email_invite_message`, `setting_email_verify_subject`, `setting_email_verify_message`, `setting_email_newpass_subject`, `setting_email_newpass_message`, `setting_email_welcome_subject`, `setting_email_welcome_message`, `setting_email_lostpassword_subject`, `setting_email_lostpassword_message`, `setting_email_friendrequest_subject`, `setting_email_friendrequest_message`, `setting_email_message_subject`, `setting_email_message_message`, `setting_email_profilecomment_subject`, `setting_email_profilecomment_message`, `setting_permission_album`, `setting_email_mediacomment_subject`, `setting_email_mediacomment_message`, `setting_chat_enabled`, `setting_chat_update`, `setting_chat_showphotos`, `setting_permission_blog`, `setting_email_blogcomment_subject`, `setting_email_blogcomment_message`) VALUES
(1, '0', 0, 'english', 0, '5.5', 'M. j, Y', 'g:i A', 1, 0, 1, 1, '', '', '', '', 1, 3, 0, 'Friend<!>Co-Worker<!>Family', 1, 1, 1, 1, 1, 0, 0, 5, 1, 0, 1, 0, 1, 'This is the terms of service agreement.', 1, 3600, 3, 1, 1, 7, 15, 1, -1, -1, 'SocialEngine Admin', 'email@domain.com', 'You have received an invitation to join our social network!', 'Hello,\r\n\r\nYou have been invited by [username] to join our social network. To join, please follow the link below and enter your invite code.\r\n\r\n[link]\r\nInvite Code: [code]\r\n\r\nBest Regards,\r\nSocial Network Administration\r\n\r\n----------------------------------------\r\n\r\n[message]', 'You have received an invitation to join our social network.', 'Hello,\r\n\r\nYou have been invited by [username] to join our social network. To join, please follow the link below:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration\r\n\r\n----------------------------------------\r\n\r\n[message]', 'Social Network - Email Verification', 'Hello [username],\r\n\r\nThank you for joining our social network. To verify your email address and continue, please click the following link:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', 'Social Network - Login Details', 'Hello [username],\r\n\r\nThank you for joining our social network. Click the following link and enter your information below to login:\r\n\r\n[link]\r\n\r\nEmail: [email]\r\nPassword: [password]\r\n\r\nBest Regards,\r\nSocial Network Administration', 'Welcome to the social network!', 'Hello [username],\r\n\r\nThank you for joining our social network. Click the following link and enter your information below to login:\r\n\r\n[link]\r\n\r\nEmail: [email]\r\nPassword: [password]\r\n\r\nBest Regards,\r\nSocial Network Administration\r\n', 'Social Network - Lost Password', 'Hello [username],\r\n\r\nYou have requested to reset your password because you have forgotten your password. If you did not request this, please ignore it. It will expire in 24 hours.\r\n\r\nTo reset your password, please click the following link:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', '[friendname] has added you as a friend.', 'Hello [username],\r\n\r\n[friendname] has added you as a friend. Please click the following link to login and confirm this friendship request:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', 'You have received a new message.', 'Hello [username],\r\n\r\nYou have just received a new message from [sender]. Please click the following link to login and view it:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', 'New Profile Comment', 'Hello [username],\r\n\r\nA new comment has been posted on your profile by [commenter]. Please click the following link to view it:\r\n\r\n[link]\r\n\r\nBest Regards,\r\nSocial Network Administration', 1, 'New Media Comment', 'Hello [username],\nA new comment has been posted on one of your photos by [commenter]. Please click the following link to view it:\n\n[link]\n\nBest Regards,\nSocial Network Administration', 1, 2, 1, 1, 'New Blog Entry Comment', 'Hello [username],\n\nA new comment has been posted on one of your blog entries by [commenter]. Please click the following link to view it:\n\n[link]\n\nBest Regards,\nSocial Network Administration')
";
mysql_query($sql,$con);

 /*..........Table structure for table `se_tabs`..............*/

 $sql= "CREATE TABLE IF NOT EXISTS `se_tabs` (
  `tab_id` int(9) NOT NULL auto_increment,
  `tab_name` varchar(50) NOT NULL default '',
  `tab_order` int(2) NOT NULL default '0',
  PRIMARY KEY  (`tab_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3";
mysql_query($sql,$con);

 /*.........insert table values `se_tabs`..............*/
	 
$sql="INSERT INTO `se_tabs` (`tab_id`, `tab_name`, `tab_order`) VALUES
(1, 'Personal Information', 1),
(2, 'Contact Information', 2);
";
mysql_query($sql,$con);

 /*..........Table structure for table `se_urls`..............*/

 $sql= "CREATE TABLE IF NOT EXISTS `se_urls` (
  `url_id` int(9) NOT NULL auto_increment,
  `url_title` varchar(100) NOT NULL default '',
  `url_file` varchar(50) NOT NULL default '',
  `url_regular` varchar(200) NOT NULL default '',
  `url_subdirectory` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`url_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4";
mysql_query($sql,$con);

 /*.........insert table values `se_urls`..............*/
	 
$sql="INSERT INTO `se_urls` (`url_id`, `url_title`, `url_file`, `url_regular`, `url_subdirectory`) VALUES
(1, 'Album List URL', 'albums', 'albums.php?user=$user', '$user/albums/'),
(2, 'Album URL', 'album', 'album.php?user=$user&album_id=$id1', '$user/albums/$id1'),
(3, 'Photo URL', 'album_file', 'album_file.php?user=$user&album_id=$id1&media_id=$id2', '$user/albums/$id1/$id2');
";
mysql_query($sql,$con);


 /*..........Table structure for table `se_users`..............*/

 $sql= "CREATE TABLE IF NOT EXISTS `se_users` (
  `user_id` int(9) NOT NULL auto_increment,
  `user_level_id` int(9) NOT NULL default '0',
  `user_email` varchar(70) NOT NULL default '',
  `user_newemail` varchar(70) NOT NULL default '',
  `user_username` varchar(50) NOT NULL default '',
  `user_password` varchar(50) NOT NULL default '',
  `user_verified` int(1) NOT NULL default '0',
  `user_lang` varchar(20) NOT NULL default '',
  `user_signupdate` int(14) NOT NULL default '0',
  `user_lastlogindate` int(14) NOT NULL default '0',
  `user_lastactive` int(14) NOT NULL default '0',
  `user_status` varchar(100) NOT NULL default '',
  `user_logins` int(9) NOT NULL default '0',
  `user_timezone` varchar(5) NOT NULL default '',
  `user_views_profile` int(9) NOT NULL default '0',
  `user_dateupdated` int(14) NOT NULL default '0',
  `user_photo` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `UNIQUE` (`user_email`,`user_username`),
  KEY `INDEX` (`user_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";
mysql_query($sql,$con);
mysql_close($con);
?>

