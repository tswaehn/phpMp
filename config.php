<?php

/*
	Be careful changing this configuration file, phpMp doesn't check this 
	file for errors, and will certainly mess phpMp up if not correct.

	If you edit this file, you must refresh the page for it to take effect
*/

/* Required */

/**********************************************************************
/ This is a list of your MPD servers, one per line. (host,port,alias) /
**********************************************************************/
$servers[] = array('localhost', 6600, 'My MusicBox');

/* Optional */
$config = array(
		/********************************************************************************
		/  If set to "yes" up and down swap buttons will appear in the active playlist	/
		/  The only real downside is your playlist will take up more space if enabled	/
		/*******************************************************************************/
		"enable_swap" => "yes",

		/***********************************************************
		/ If set to yes, this will hide your playlist options, and / 
		/ leave you with an option to show it. Otherwise it will   /
		/ always be shown.					   /
		/**********************************************************/
		"playlist_option_hide" => "no",

		/***************************************************************
		/ Frame border size, set this to 0 for looks, 1 for usability. /
		/**************************************************************/
		"frame_border_size" => "0",

		/*************************************************************
		/ Change phpMp behaviour to where a button changes from play /
		/ to pause and visa-versa, instead of showing all buttons    /
		/************************************************************/
		"play_pause" => "yes",

		/*************************************************************
		/ Display the server in the title? (if more than one server) /
		/************************************************************/
                "server_in_title" => "yes",
                
		/***********************************************
		/ The order your music files will be sorted in,/ 
		/ metadata that doesn't exist will get skipped /
		/**********************************************/
		"default_sort" => "Artist,Composer,Performer,Track,Album,Track,Title,Time,Date,Genre",

		/******************************************************************
		/ Use this to change the width of either the main/playlist window /
		/*****************************************************************/
		"frames_layout" => "cols=\"1*,250\"",

		/******************************************
		/ Set the value of crossfade (in seconds) /
		/*****************************************/
		"crossfade_seconds" => "10",

		/*******************************************************************
		/ The value of this +1 is how much of the active playlist is shown /
		/ Set to 0 to disable                                              /
		/******************************************************************/
		"hide_threshold" => "15",

		/***********************************************************
		/ If "yes" this will replace your playlist without prompt. /
		/**********************************************************/
		"overwrite_playlists" => "yes",

		/**************************************************
		/ How often to refresh the active playlist frame. /
		/*************************************************/
		"refresh_freq" => "30",

		/***********************************************************************
		/ Yes to this to see the time left instead rather than the time so far /
		/**********************************************************************/
		"time_left" => "no",

		/************************************************************************
		/ Yes to this to enable the icecast/streamcast stream browser.		/ 
		/ If you enable this 'allow_url_fopen = On' in your php.ini.		/
		/***********************************************************************/
		"stream_browser" => "no",

		/************************************************************************
		/ Playlist Align (this is useful for making the frame bigger)           /
		/ Valid values are left, right, and center (center is good for scaling) /
		/***********************************************************************/
		"playlist_align" => "center",

		/***************************************************************************
		/ This is required for doing an addall.                                    /
		/ Without javascript this will try to addall through a URL and it will not /
		/ work with default Apache values                                          /
		***************************************************************************/
		"use_javascript" => "yes",

		/*******************************************************************
		/ Right now this affects being able to change servers, remembering / 
		/ your MPD password and weather the playlist is hidden or not      /
		/******************************************************************/ 
		"use_cookies" => "yes",

		/*************************************************************
		/ Use user-supplied images (see theme.php for more details). /
		/************************************************************/
		"use_images" => "no",

		/********************************************************************************************************
		/ Remove any of the following to get rid of the field in the music tables.  				/
		/ Add any fields you would like that you have added to the metadata_to_use option in your mpd.conf	/
		/ This field is extremely important to be setup correctly, type the field exactly as you did in mpd.conf/
		/ capitolize the first letter.										/
		/ Title is absolutely required for this phpMp to function, else filename will show			/
		/*******************************************************************************************************/
		"display_fields" => array('Artist', 'Composer', 'Performer', 'Title', 'Album', 'Track', 'Genre', 'Date', 'Time'),

		/*************************************************************************************
		/ These change the way your song is displayed in the song field and in the playlist. /
		/ You can add any values here that are in your display_fields value. You should add  /
		/ one value per set of quotes, that way the lines will be broken properly	     /
		/										     /
		/ It is wise to have a space in the separator or have wordwrap set.		     /
		/************************************************************************************/
		"song_display_conf" => array( "(Artist)", "Title" ),
		"song_display_conf_separator" => " ",

		"playlist_display_conf" => array( "(Artist)", "Title" ),
		"playlist_display_conf_separator" => " ",

		/**************************************************************************
		/ This will wrap your words at count's characters if there are no spaces, /
		/ the count is adjustable in case you change your font. This only affects /
		/ the playlist frame. 0 to disable.                                       /
 		/*************************************************************************/
		"wordwrap" => "0",

		/*********************************************************
		/ If you prefer not to have metadata (id3/vorbis) shown. /
		/********************************************************/
		"filenames_only" => "no",

			// Don't Edit!
			"regex" => array(

			/****************************************************************
			/ If "filenames_only" is set to yes configure the next options. /
			/***************************************************************/
				/************************************************************************
				/ You can set some things to remove from your filenames easier to read. /
				/***********************************************************************/
				"remove" => array('.mp3', '.ogg', '.flac', '.aac', '.mod'),

				/*************************
				/ Replace _ with a space /
				/************************/
				"space" => "yes",

				/*******************************************
				/ Uppercase the first letter after a space /
				/******************************************/
				"uppercase_first" => "yes"),
		
		/*****************
		/ Volume Options /
		/****************/
		"display_volume" => "yes",
		"volume_incr"    => "10",

		/**************************
		/ No need to change these /
		/*************************/
		"title" => "phpMp",
		"unknown_string" => "",
		"song_separator" => "rqqqrqqqr"
);
?>
