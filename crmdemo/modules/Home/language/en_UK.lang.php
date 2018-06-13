<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if name}}{{str name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_ABOUT_TITLE' => 'About &raquo; {{appId}}',
  'LBL_MODULE_NAME' => 'Home',
  'LBL_MODULE_NAME_SINGULAR' => 'Home',
  'LBL_MODULES_TO_SEARCH' => 'Modules to Search',
  'LBL_NEW_FORM_TITLE' => 'New Contact',
  'LBL_FIRST_NAME' => 'First Name:',
  'LBL_LAST_NAME' => 'Last Name:',
  'LBL_LIST_LAST_NAME' => 'Last Name',
  'LBL_PHONE' => 'Phone:',
  'LBL_EMAIL_ADDRESS' => 'Email Address:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'My Pipeline',
  'LBL_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Campaign ROI',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'My Closed Won Opportunities Gauge',
  'LNK_NEW_CONTACT' => 'Create Contact',
  'LNK_NEW_ACCOUNT' => 'Create Account',
  'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
  'LNK_NEW_QUOTE' => 'Create Quote',
    'LBL_SOURCE_JQUERY' => 'jQuery - jQuery is a fast and concise JavaScript Library that simplifies HTML document traversing, event handling, animating, and Ajax interactions for rapid web development.',
    'LBL_SOURCE_PLACEHOLDER' => 'jQuery-Placeholder - A plugin that enables HTML5 placeholder support for legacy browsers.',
    'LBL_SOURCE_JQUERYUI' => 'jQuery UI - The official jQuery user interface library.',
    'LBL_SOURCE_LESSPHP' => 'lessphp - A compiler for LESS written in PHP.',
    'LBL_SOURCE_BACKBONE' => 'Backbone.js - A MVC framework for Javascript-heavy applications.',
    'LBL_SOURCE_CHOSEN' => 'Chosen - A library for making long, unwieldy select boxes more friendly.',
    'LBL_SOURCE_HANDLEBARS' => 'Handlebars - A templating engine to build semantic templates effectively.',
    'LBL_SOURCE_JASMINE' => 'Jasmine - A behavior-driven development framework for testing JavaScript code.',
    'LBL_SOURCE_JQUERY_IFRAME' => 'jquery.iframe-transport.js - A jQuery Ajax transport plugin that supports file uploads through a hidden iframe.',
    'LBL_SOURCE_SINON' => 'sinon.js - Standalone test spies, stubs and mocks for JavaScript.',
    'LBL_SOURCE_STASH' => 'Stash - A library for JavaScript that makes using offline storage easy.',
    'LBL_SOURCE_BOOTSTRAP' => 'Twitterbootstrap - HTML, CSS, and JS toolkit from Twitter.',
    'LBL_SOURCE_ASYNC' => 'Async - Async utilities for node and the browser.',
    'LBL_SOURCE_PHPEXCEL' => 'PHPExcel - A pure PHP library for reading and writing spreadsheet files.', 
  'LNK_NEW_LEAD' => 'Create Lead',
  'LNK_NEW_CASE' => 'Create Case',
  'LNK_NEW_NOTE' => 'Create Note or Attachment',
  'LNK_NEW_CALL' => 'Log Call',
  'LNK_NEW_EMAIL' => 'Archive Email',
  'LNK_COMPOSE_EMAIL' => 'Compose Email',
  'LNK_NEW_MEETING' => 'Schedule Meeting',
  'LNK_NEW_TASK' => 'Create Task',
  'LNK_NEW_BUG' => 'Report Bug',
  'LBL_ADD_BUSINESSCARD' => 'Enter Business Card',
  'ERR_ONE_CHAR' => 'Please enter at least one letter or number for your search ...',
  'LBL_OPEN_TASKS' => 'My Open Tasks',
  'LBL_SEARCH_RESULTS_IN' => 'in',
  'LNK_NEW_SEND_EMAIL' => 'Compose Email',
  'LBL_NO_ACCESS' => 'You do not have access to this area.  Contact your site administrator to obtain access',
  'LBL_NO_RESULTS_IN_MODULE' => '-- No Results --',
  'LBL_NO_RESULTS' => '<h2>There were no results found. Please search again.</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>Search Tips:</h3><ul><li>Make sure you have the proper categories selected above.</li><li>Broaden your search criteria.</li><li>If you still cannot find any results try the advanced search option.</li></ul>',

  'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this Sugar Dashlet.',
  'LBL_ADD_DASHLETS' => 'Add Sugar Dashlets',
  'LBL_ADD_PAGE' => 'Add Page',
  'LBL_DEL_PAGE' => 'Delete Page',
  'LBL_WEBSITE_TITLE' => 'Website',
  'LBL_RSS_TITLE' => 'News Feed',
  'LBL_DELETE_PAGE' => 'Delete Page',
  'LBL_CHANGE_LAYOUT' => 'Change Layout',
  'LBL_RENAME_PAGE' => 'Rename Page',
  'LBL_CLOSE_DASHLETS' => 'Close',
  'LBL_OPTIONS' => 'Options',
  // dashlet search fields
  'LBL_TODAY'=>'Today',
  'LBL_YESTERDAY' => 'Yesterday',
  'LBL_TOMORROW'=>'Tomorrow',
  'LBL_LAST_WEEK'=>'Last Week',
  'LBL_NEXT_WEEK'=>'Next Week',
  'LBL_LAST_7_DAYS'=>'Last 7 Days',
  'LBL_NEXT_7_DAYS'=>'Next 7 Days',
  'LBL_LAST_MONTH'=>'Last Month',
  'LBL_NEXT_MONTH'=>'Next Month',
  'LBL_LAST_QUARTER'=>'Last Quarter',
  'LBL_THIS_QUARTER'=>'This Quarter',
  'LBL_LAST_YEAR'=>'Last Year',
  'LBL_NEXT_YEAR'=>'Next Year',
  'LBL_LAST_30_DAYS' => 'Last 30 Days',
  'LBL_NEXT_30_DAYS' => 'Next 30 Days',
  'LBL_THIS_MONTH' => 'This Month',
  'LBL_THIS_YEAR' => 'This Year',

  'LBL_MODULES' => 'Modules',
  'LBL_CHARTS' => 'Charts',
  'LBL_TOOLS' => 'Tools',
  'LBL_WEB' => 'Web',
  'LBL_SEARCH_RESULTS' => 'Search Result',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Module Views',
      'Portal' => 'Portal',
      'Charts' => 'Charts',
      'Tools' => 'Tools',
      'Miscellaneous' => 'Miscellaneous'),
  'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of Sugar Dashlets your administrator has set. Please remove a Sugar Dashlet to add a new one.',
  'LBL_ADDING_DASHLET' => 'Adding Sugar Dashlet ...',
  'LBL_ADDED_DASHLET' => 'Sugar Dashlet Added',
  'LBL_DASHBOARD_LAYOUT_CONFIRM' => 'Dashlets will be re-arranged, are you sure you want to change the column layout?',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove the Sugar Dashlet?',
  'LBL_REMOVING_DASHLET' => 'Removing Sugar Dashlet ...',
  'LBL_REMOVED_DASHLET' => 'Sugar Dashlet Removed',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',
  'LBL_NO_DASHBOARD_CONFIGURED' => 'No dashboard configured.',
  'LBL_CREATE_DASHBOARD_LINK' => 'Create a dashboard',

  'LBL_DASHLET_WEBPAGE_NAME' => 'Web Page',
  'LBL_DASHLET_WEBPAGE_DESC' => 'Web Page',
  'LBL_DASHLET_WEBPAGE_URL' => 'URL',
  'LBL_DASHLET_WEBPAGE_URL_HELP' => 'Some sites may not load correctly due to insecure content or policies.',

  'LBL_DASHLET_ADD' => 'Add a Dashlet',
  'LBL_DASHLET_DELETE' => 'Delete Sugar Dashlet',
  'LBL_DASHLET_REFRESH' => 'Refresh Sugar Dashlet',
  'LBL_DASHLET_EDIT' => 'Edit Sugar Dashlet',
  'LBL_DASHBOARD_TITLE' => 'Dashboard Title',
  'LBL_CREATE_DASHBOARD_MENU' => 'Create Dashboard',
  'LBL_DASHBOARD_EDIT' => 'Edit Dashboard',
  'LBL_DASHBOARD_ADD_ROW' => 'Add a Row',
  'LBL_DASHBOARD_ADD_1_COLUMN' => '+ 1 column',
  'LBL_DASHBOARD_ADD_2_COLUMNS' => '+ 2 columns',
  'LBL_DASHBOARD_ADD_3_COLUMNS' => '+ 3 columns',
  'LBL_DASHBOARD_1_COLUMN_LAYOUT' => '1 column layout',
  'LBL_DASHBOARD_2_COLUMN_LAYOUT' => '2 column layout',
  'LBL_DASHBOARD_3_COLUMN_LAYOUT' => '3 column layout',

  'LBL_TRAINING_TITLE' => 'Training',
  'LBL_SEARCH_DASHLET' => 'Search dashlets',
  'LBL_CREATING_NEW_PAGE' => 'Creating New Page...',
  'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You can add new content with the Add Sugar Dashlets option.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Are you sure you want to delete this page?',
  'LBL_DELETE_DASHBOARD_CONFIRM' => 'Are you sure you want to delete this dashboard?',
  'LBL_DELETE_DASHBOARD_SUCCESS' => 'The dashboard "{{name}}" has been deleted.',
  'LBL_SAVING_PAGE_TITLE' => 'Saving Page Title...',
  'LBL_RETRIEVING_PAGE' => 'Retrieving Page...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'My Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Sales',
  'LBL_HOME_PAGE_3_NAME' => 'Support',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Tracker',
  'LBL_CLOSE_SITEMAP' =>'Close',

  'LBL_SEARCH' => 'Search',
  'LBL_CLEAR' => 'Clear',

  'LBL_BASIC_CHARTS' => 'Basic Charts',
  'LBL_REPORT_CHARTS' => 'Report Charts',

  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'My Favourites',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Global Team Reports',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'My Team Reports',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'My Saved Reports',

  'LBL_DASHLET_SEARCH' => 'Find Sugar Dashlet',

//ABOUT page
  'LBL_VERSION' => 'Version',
  'LBL_BUILD' => 'Build',
    'TPL_ABOUT' => 'About {{product_name}}, Version {{version}} (Build {{build}}{{#if custom_version}} - {{custom_version}}{{/if}})',
    'LBL_RESOURCES' => 'Resources',
    'LBL_RESOURCES_DOCUMENTATION' => 'Documentation',
    'LBL_RESOURCES_DEVELOPERS' => 'Developers',
    'LBL_RESOURCES_SUGAR_INFO' => 'SugarCRM Company Information',
    'LBL_LANGUAGE_PACKS' => 'Language Packs',
    'TPL_LANGUAGE_PACKS_PROVIDED_BY' => 'Provided by {{{link}}}',
    'LBL_SUGAR_VERSION' => 'version',
    'LBL_SUGAR_SOURCECODE_DESC' => 'Sales force automation application.',
    'LBL_THIRD_PARTY_SOFTWARE_TITLE' => 'Third Party Software',
    'LBL_THIRD_PARTY_SOURCECODE' => 'Information about third party code used in this product, including related license terms, is available at',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => "Sugar Professional",
  'LBL_SUGAR_ENTERPRISE' => "Sugar Enterprise",
  'LBL_AND' => "and",
  'LBL_ARE' => "are",
  'LBL_TRADEMARKS' => 'trademarks',
  'LBL_OF' => 'of',
  'LBL_FOUNDERS' => 'Founders',
  'LBL_DEVELOPERS' => 'Developers',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Join the Sugar Community',
  'LBL_DETAILS_SUGARFORGE' => 'Collaborate and develop Sugar extensions',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Buy and sell certified Sugar extensions',
  'LBL_TRAINING' => 'Training',
  'LBL_DETAILS_TRAINING' => 'Learn about Sugar using online and interactive learning content',
  'LBL_FORUMS' => 'Forums',
  'LBL_DETAILS_FORUMS' => 'Discuss Sugar with expert community users and developers',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Search the knowledge base of user and developer topics',
  'LBL_DEVSITE' => 'Developer Site',
  'LBL_DETAILS_DEVSITE' => 'Discover resources, tutorials, and helpful links to get you up to speed on Sugar development',
  'LBL_GET_SUGARCRM_RSS' => 'Get SugarCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'SugarCRM News',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SugarCRM Training News',
  'LBL_SUGARCRM_FORUMS' => 'SugarCRM Forums',
  'LBL_SUGARFORGE_NEWS' => 'SugarForge News',
  'LBL_ALL_NEWS' => 'All News',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Click this link for a current list of Sugar contributors!',
  'LBL_SOURCE_CODE' => 'Source Code',
  'LBL_SOURCE_SUGAR' => 'Sugar - The world&#39;s most popular sales force automation application created by SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - A template engine for PHP created by Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - A set of PHP classes that allow developers to create and consume web services created by NuSphere Corporation and Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - A calendar for entering dates created by Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - A library for creating PDF documents created by Wayne Munro',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - A WebDAV Server Implementation in PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - library offers compression and extraction functions for Zip formatted archives by Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - A template engine for PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - The UI Library Utilities facilitate the implementation of rich client-side features.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - A full featured email transfer class for PHP',
  'LBL_SOURCE_JSHRINK' => 'JShrink - A Javascript minifier written in PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Allows for quick two-way blowfish encryption without requiring the MCrypt PHP extension.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - A SAX parser for HTML and other badly formed XML documents',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensions to the Yahoo! User Interface Library by Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player detection and embed script.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - A WYSIWYG editor control for web browsers that enables the user to edit HTML contents',
  'LBL_SOURCE_EXT' => 'Ext - A client-side JavaScript framework for building web applications.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - A free CAPTCHA service that helps to digitise books, newspapers and old time radio shows.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - A PHP class for generating PDF documents.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - A css parser and minifier.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - A simple SAML toolkit for PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - The overflow:scroll for mobile webkit.  Native scrolling inside a fixed width/height element.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualisations for the Web.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - An open source, object oriented web application framework for PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - CSV data parser for PHP',
  'LBL_SOURCE_PHPJS' => 'php.js - Use PHP functions in JavaScript',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - A standards-compliant HTML filtering library.',
  'LBL_SOURCE_XHPROF' => 'XHProf - A function-level hierarchical profiler for PHP.',
  'LBL_DASHLET_TITLE' => 'My Sites',
  'LBL_DASHLET_OPT_TITLE' => 'Title',
  'LBL_DASHLET_OPT_URL' => 'Website Location',
  'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet Height (in pixels)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Sugar News',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Discover Sugar',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'More Detail' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Basic Search' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Advanced Search' /*for 508 compliance fix*/,

  'LBL_MOST_ACTIVE_COLLEAGUES' => 'Most Active',
  'LBL_MOST_ACTIVE_COLLEAGUES_DESC' => 'It displays internal users who are most active',
  'LBL_MOST_CALLS_MADE' => '{{count}} calls made',
  'LBL_MOST_EMAILS_SENT' => '{{count}} emails sent',
  'LBL_MOST_EMAILS_RECEIVED' => '{{count}} emails received',
  'LBL_MOST_MEETING_HELD' => '{{count}} meetings held',

    'LBL_SUGAR_CUBE_ALT' => 'SugarCRM',


    // Record View Help Text
    'LBL_HELP_RECORD_TITLE' => 'Welcome to the Sugar 7 Help Dashboard',
    'LBL_HELP_RECORD' => 'The Help Dashlet displays specific information about the module you are viewing, provides detailed steps for performing some actions in the module, and directs you where to go for more comprehensive information and support. The Help Dashlet remains open so you can view the steps as you execute the steps in the module.

The Help Dashboard is available for all Sugar 7 modules and can be toggled "open" and "closed" by clicking the Help icon in the application footer.',

    'LBL_FACETS_DASHBOARD_TITLE' => 'Filter',
);
