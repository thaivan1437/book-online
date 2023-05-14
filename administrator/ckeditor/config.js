/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.entities = false;
	//config.entities_latin = false;
	
    config.pasteFromWordPromptCleanup = false;
    config.pasteFromWordCleanupFile = false;
    config.pasteFromWordRemoveFontStyles = false;
    config.pasteFromWordNumberedHeadingToList = false;
    config.pasteFromWordRemoveStyles = false;
    config.allowedContent=true;
    config.extraPlugins = 'tableresize,codemirror,wenzgmap,googledocs,symbol,lineheight,youtube,entities,bootstrapVisibility,tableresize,slideshow,bgimage,letterspacing';
    config.line_height = "1em; 1.1em; 1.2em; 1.3em; 1.4em; 1.5em; 1.6em; 1.7em; 1.8em; 1.9em; 2em; 2.1em; 2.2em; 2.3em; 2.4em; 2.5em; 2.6em; 2.7em; 2.8em; 2.9em; 3em";

	config.toolbar = 'Full';
	config.filebrowserBrowseUrl = 'ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = 'ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = 'ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};