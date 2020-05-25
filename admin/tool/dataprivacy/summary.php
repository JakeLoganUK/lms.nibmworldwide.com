<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>Registry configuration summary</title>
    <link rel="shortcut icon" href="https://lms.nibmworldwide.com/theme/image.php/nibm/theme/1587183851/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Registry configuration summary" />
<link rel="stylesheet" type="text/css" href="https://lms.nibmworldwide.com/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://lms.nibmworldwide.com/theme/styles.php/nibm/1587183851_1/all" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/lms.nibmworldwide.com","sesskey":"Fc4zCnMy9F","sessiontimeout":"7200","themerev":"1587183851","slasharguments":1,"theme":"nibm","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1587183851","admin":"admin","svgicons":true,"usertimezone":"Asia\/Kolkata","contextid":1,"langrev":1587183851,"templaterev":"1587183851"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/lms.nibmworldwide.com\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/lms.nibmworldwide.com\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/lms.nibmworldwide.com\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/lms.nibmworldwide.com\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/lms.nibmworldwide.com\/theme\/yui_combo.php?m\/1587183851\/","combine":true,"comboBase":"https:\/\/lms.nibmworldwide.com\/theme\/yui_combo.php?","ext":false,"root":"m\/1587183851\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-beautify":{},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/lms.nibmworldwide.com\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/lms.nibmworldwide.com\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1587183851\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/lms.nibmworldwide.com\/lib\/javascript.php\/1587183851\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/lms.nibmworldwide.com\/lib\/javascript.php\/1587183851\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.2\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-5JQFNNY4ZY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5JQFNNY4ZY');
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-admin-tool-dataprivacy-summary" class="format-site admin path-admin path-admin-tool path-admin-tool-dataprivacy gecko dir-ltr lang-en yui-skin-sam yui3-skin-sam lms-nibmworldwide-com pagelayout-base course-1 context-1 ">
<div class="toast-wrapper mx-auto py-0 fixed-top" role="status" aria-live="polite"></div>

<div id="page-wrapper" class="d-print-block">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="https://lms.nibmworldwide.com/lib/javascript.php/1587183851/lib/babel-polyfill/polyfill.min.js"></script>
<script src="https://lms.nibmworldwide.com/lib/javascript.php/1587183851/lib/mdn-polyfills/polyfill.js"></script>
<script src="https://lms.nibmworldwide.com/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script src="https://lms.nibmworldwide.com/lib/javascript.php/1587183851/lib/javascript-static.js"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



    <nav class="fixed-top navbar navbar-light bg-white navbar-expand moodle-has-zindex" aria-label="Site navigation">
    
            <div data-region="drawer-toggle" class="d-inline-block mr-3">
                <button aria-expanded="false" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="icon fa fa-bars fa-fw " aria-hidden="true"  ></i><span class="sr-only">Side panel</span></button>
            </div>
    
            <a href="https://lms.nibmworldwide.com" class="navbar-brand has-logo
                    ">
                    <span class="logo d-none d-sm-inline">
                        <img src="https://lms.nibmworldwide.com/pluginfile.php/1/core_admin/logocompact/100x100/1587183851/logo.png" alt="NIBM World Wide">
                    </span>
                <span class="site-name d-none d-md-inline">NIBM World Wide</span>
            </a>
    
            <ul class="navbar-nav d-none d-md-flex">
                <!-- custom_menu -->
                <li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5ecb2c23e66615ecb2c23e4e612" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5ecb2c23e66615ecb2c23e4e612">
        Services
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5ecb2c23e66615ecb2c23e4e612" aria-labelledby="drop-down-5ecb2c23e66615ecb2c23e4e612">
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/attendance.php" title="Attendance">Attendance</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/messages.php" title="Messages">Messages</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/management.php" title="Management">Management</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/internet.php" title="Apply for Internet Package">Apply for Internet Package</a>
                <a class="dropdown-item" role="menuitem" href="https://www.nibm.lk/students/exams/repeat"target="_blank" title="Apply for Repeat Examination">Apply for Repeat Examination</a>
                <a class="dropdown-item" role="menuitem" href="https://www.nibm.lk/students/exams/viva"target="_blank" title="Request a Viva Date">Request a Viva Date</a>
                <a class="dropdown-item" role="menuitem" href="https://www.nibm.lk/students/exams/transcript"target="_blank" title="Request a Transcript">Request a Transcript</a>
                <a class="dropdown-item" role="menuitem" href="https://www.nibm.lk/students/exams/participation"target="_blank" title="Request a Participation Letter">Request a Participation Letter</a>
                <a class="dropdown-item" role="menuitem" href="https://nibm.lk/latest-results-2/"target="_blank" title="Final Results">Final Results</a>
                <a class="dropdown-item" role="menuitem" href="https://nibm.lk/payment/"target="_blank" title="Online Payments">Online Payments</a>
    </div>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5ecb2c23e67295ecb2c23e4e613" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5ecb2c23e67295ecb2c23e4e613">
        Library
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5ecb2c23e67295ecb2c23e4e613" aria-labelledby="drop-down-5ecb2c23e67295ecb2c23e4e613">
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=E-Books" title="eBooks">eBooks</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=Emerald" title="Emerald Insight eJournals">Emerald Insight eJournals</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=Harvard" title="Harvard Business Review eJournals and Videos">Harvard Business Review eJournals and Videos</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/guides.php" title="Participant's Guides">Participant's Guides</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=Past-Papers" title="Past Papers">Past Papers</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=Pearson" title="Pearson eBooks">Pearson eBooks</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/terms.php" title="Terms &amp; Conditions">Terms &amp; Conditions</a>
    </div>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5ecb2c23e677f5ecb2c23e4e614" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5ecb2c23e677f5ecb2c23e4e614">
        Questionnaire
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5ecb2c23e677f5ecb2c23e4e614" aria-labelledby="drop-down-5ecb2c23e677f5ecb2c23e4e614">
                <a class="dropdown-item" role="menuitem" href="https://docs.google.com/forms/d/e/1FAIpQLSdmvK_NayynPEO0NfXG3bXtkNeJCN2TGkx9aR75JezCCA8A4Q/viewform?usp=sf_link" title="Online Learning Survey">Online Learning Survey</a>
    </div>
</li><li class="nav-item">
    <a class="nav-item nav-link" href="https://nibm.lk/blog-2-columns"target="_blank" title="News">News</a>
</li><li class="nav-item">
    <a class="nav-item nav-link" href="https://www.nibm.lk/payments"target="_blank" title="Pay Online">Pay Online</a>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5ecb2c23e67f65ecb2c23e4e615" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5ecb2c23e67f65ecb2c23e4e615">
        Help
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5ecb2c23e67f65ecb2c23e4e615" aria-labelledby="drop-down-5ecb2c23e67f65ecb2c23e4e615">
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/NIBM LMS Manual - Student.pdf"target="_blank" title="Student User Manual">Student User Manual</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/NIBM LMS Manual - Lecturer.pdf"target="_blank" title="Lecturer User Manual">Lecturer User Manual</a>
                <a class="dropdown-item" role="menuitem" href="https://docs.moodle.org"target="_blank" title="Online Help">Online Help</a>
                <a class="dropdown-item" role="menuitem" href="https://lms.nibmworldwide.com/mod/nibm/contact.php" title="Contact Tutor">Contact Tutor</a>
                <a class="dropdown-item" role="menuitem" href="https://www.nibm.lk/contact-us"target="_blank" title="Contact NIBM">Contact NIBM</a>
    </div>
</li>
                <!-- page_heading_menu -->
                
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="d-none d-lg-block">
                    <div class="search-input-wrapper nav-link" id="5ecb2c23e6852"><div role="button" tabindex="0"><i class="icon fa fa-search fa-fw "  title="Search" aria-label="Search"></i></div><form class="search-input-form" action="https://lms.nibmworldwide.com/search/index.php"><label for="id_q_5ecb2c23e6852" class="accesshide">Enter your search query</label><input type="text" name="q" placeholder="Search" size="13" tabindex="-1" id="id_q_5ecb2c23e6852" class="form-control" /></form></div>
                </li>
                <!-- navbar_plugin_output -->
                <li class="nav-item">
                    <div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="55244"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-5ecb2c23e73045ecb2c23e4e616"
        aria-haspopup="true"
        aria-label="Show notification window with no new notifications"
        tabindex="0">
                <i class="icon fa fa-bell fa-fw "  title="Toggle notifications menu" aria-label="Toggle notifications menu"></i>
        <div class="count-container hidden" data-region="count-container"
        aria-label="There are 0 unread notifications">0</div>

    </div>
    <div 
        id="popover-region-container-5ecb2c23e73045ecb2c23e4e616"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Notification window"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Mark all as read"
           data-action="mark-all-read"
           role="button">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw "  title="Mark all as read" aria-label="Mark all as read"></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </a>
        <a href="https://lms.nibmworldwide.com/message/notificationpreferences.php?userid=55244"
           title="Notification preferences">
            <i class="icon fa fa-cog fa-fw "  title="Notification preferences" aria-label="Notification preferences"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://lms.nibmworldwide.com/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">See all</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed" data-region="popover-region-messages">
    <a id="message-drawer-toggle-5ecb2c23ea03e5ecb2c23e4e617" class="nav-link d-inline-block popover-region-toggle position-relative" href="#"
            role="button">
        <i class="icon fa fa-comment fa-fw "  title="Toggle messaging drawer" aria-label="Toggle messaging drawer"></i>
        <div class="count-container hidden" data-region="count-container"
        aria-label="There are 0 unread conversations">0</div>
    </a>
</div>
                </li>
                <!-- user_menu -->
                <li class="nav-item d-flex align-items-center">
                    <div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-1" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-1-menubar" role="menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class=" dropdown-toggle icon-no-margin" id="action-menu-toggle-1" aria-label="User menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-1-menu">
                            
                            <span class="userbutton"><span class="usertext mr-1">K.A.A.S. Ranaweera</span><span class="avatars"><span class="avatar current"><img src="https://lms.nibmworldwide.com/pluginfile.php/60934921/user/icon/nibm/f2?rev=206716" class="userpicture" width="35" height="35" aria-hidden="true" /></span></span></span>
                                
                            <b class="caret"></b>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-1-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu" data-align="tr-br">
                                        <a href="https://lms.nibmworldwide.com/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1">
                                                <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-1">
                                                Dashboard
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://lms.nibmworldwide.com/user/profile.php?id=55244" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2">
                                                <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-2">
                                                Profile
                                            </span>
                                        </a>
                                        <a href="https://lms.nibmworldwide.com/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3">
                                                <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-3">
                                                Grades
                                            </span>
                                        </a>
                                        <a href="https://lms.nibmworldwide.com/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4">
                                                <i class="icon fa fa-comment fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-4">
                                                Messages
                                            </span>
                                        </a>
                                        <a href="https://lms.nibmworldwide.com/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5">
                                                <i class="icon fa fa-wrench fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-5">
                                                Preferences
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://lms.nibmworldwide.com/login/logout.php?sesskey=Fc4zCnMy9F" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6">
                                                <i class="icon fa fa-sign-out fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-6">
                                                Log out
                                            </span>
                                        </a>
                            </div>
                    </div>
                </div>

        </div>

</div></div>
                </li>
            </ul>
            <!-- search_box -->
    </nav>
    
    <div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true" tabindex="-1">
        <nav class="list-group" aria-label="Site">
            <ul>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/my/" data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Dashboard</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/?redirect=0" data-key="home" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-home fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Site home</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/calendar/view.php?view=month" data-key="calendar" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-calendar fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Calendar</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/user/files.php" data-key="privatefiles" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-file-o fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Private files</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="list-group-item " data-key="mycourses" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="0" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                            <div class="ml-0">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body">My courses</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24120" data-key="24120" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Mathematics for Computing (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24121" data-key="24121" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Database Management Systems  (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24122" data-key="24122" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Programming Fundamentals (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24123" data-key="24123" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Introduction to Computer Science (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24549" data-key="24549" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">GUI Application Development (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24550" data-key="24550" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body "> Object Oriented Programming (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24551" data-key="24551" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Computer Technology (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24552" data-key="24552" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Effective Communication Skills-1 (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24553" data-key="24553" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Web Application Development (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/course/view.php?id=24554" data-key="24554" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="5624">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">Enterprise Application Development-1 (DSE20.1F/KU)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action  " href="https://lms.nibmworldwide.com/my/" data-key="courseindexpage" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                            <div class="ml-1">
                                <div class="media">
                                        <span class="media-left">
                                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                    <span class="media-body ">More...</span>
                                </div>
                            </div>
                        </a>
                    </li>
            </ul>
        </nav>
    </div>

    <div id="page" class="container-fluid d-print-block">
        <header id="page-header" class="row">
    <div class="col-12 pt-3 pb-3">
        <div class="card ">
            <div class="card-body ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <div class="page-context-header"><div class="page-header-headings"><h1>NIBM World Wide</h1></div></div>
                    </div>

                    <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <div id="page-navbar">
                        <nav aria-label="Navigation bar">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://lms.nibmworldwide.com/my/"  >Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://lms.nibmworldwide.com/user/profile.php?id=55244"  >Profile</a>
                </li>
                <li class="breadcrumb-item">Registry configuration summary</li>
    </ol>
</nav>
                    </div>
                    <div class="ml-auto d-flex">
                        
                    </div>
                    <div id="course-header">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <div id="page-content" class="row pb-3 d-print-block">
            <div id="region-main-box" class="col-12">
                <section id="region-main"  aria-label="Content">

                    <span class="notifications" id="user-notifications"></span>
                    <div role="main"><span id="maincontent"></span><h2>Data retention summary</h2>
<p>This summary shows the default categories and purposes for retaining user data. Certain areas may have more specific categories and purposes than those listed here.</p>
<div>
        <div class="card mb-3">
            <div class="card-header"><h3>Site</h3></div>
            <div class="card-body p-l-2 p-r-2">

                <h4>Purpose</h4>
                <dl>
                    <dt></dt>
                    <dd></dd>
                    <dt>Retention period</dt>
                    <dd>No retention period was defined</dd>
                </dl>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"><h3>Users</h3></div>
            <div class="card-body p-l-2 p-r-2">

                <h4>Purpose</h4>
                <dl>
                    <dt></dt>
                    <dd></dd>
                    <dt>Retention period</dt>
                    <dd>No retention period was defined</dd>
                </dl>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"><h3>Course categories</h3></div>
            <div class="card-body p-l-2 p-r-2">

                <h4>Purpose</h4>
                <dl>
                    <dt></dt>
                    <dd></dd>
                    <dt>Retention period</dt>
                    <dd>No retention period was defined</dd>
                </dl>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"><h3>Courses</h3></div>
            <div class="card-body p-l-2 p-r-2">

                <h4>Purpose</h4>
                <dl>
                    <dt></dt>
                    <dd></dd>
                    <dt>Retention period</dt>
                    <dd>No retention period was defined</dd>
                </dl>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"><h3>Activity modules</h3></div>
            <div class="card-body p-l-2 p-r-2">

                <h4>Purpose</h4>
                <dl>
                    <dt></dt>
                    <dd></dd>
                    <dt>Retention period</dt>
                    <dd>No retention period was defined</dd>
                </dl>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"><h3>Blocks</h3></div>
            <div class="card-body p-l-2 p-r-2">

                <h4>Purpose</h4>
                <dl>
                    <dt></dt>
                    <dd></dd>
                    <dt>Retention period</dt>
                    <dd>No retention period was defined</dd>
                </dl>
            </div>
        </div>
</div></div>
                    
                    

                </section>
            </div>
        </div>
    </div>
    <div
    id="drawer-5ecb2c23ed9165ecb2c23e4e6116"
    class=" drawer bg-white hidden"
    aria-expanded="false"
    aria-hidden="true"
    data-region="right-hand-drawer"
    role="region"
    tabindex="-1"
>
            <div id="message-drawer-5ecb2c23ed9165ecb2c23e4e6116" class="message-app" data-region="message-drawer" role="region">
            <div class="header-container position-relative" data-region="header-container">
                <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-contacts">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch">
                            <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Contacts
                        </div>
                        <div class="ml-auto">
                            <a href="#" data-route="view-search" role="button" aria-label="Search">
                                <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                            </a>
                        </div>
                    </div>
                </div>                
                <div
                    class="hidden bg-white position-relative border-bottom px-2 py-2"
                    aria-hidden="true"
                    data-region="view-conversation"
                >
                    <div class="hidden" data-region="header-content"></div>
                    <div class="hidden" data-region="header-edit-mode">
                        
                        <div class="d-flex p-2 align-items-center">
                            Messages selected:
                            <span class="ml-1" data-region="message-selected-court">1</span>
                            <button type="button" class="ml-auto close" aria-label="Cancel message selection"
                                data-action="cancel-edit-mode">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div data-region="header-placeholder">
                        <div class="d-flex">
                            <div
                                class="ml-2 rounded-circle bg-pulse-grey align-self-center"
                                style="height: 38px; width: 38px"
                            >
                            </div>
                            <div class="ml-2 " style="flex: 1">
                                <div
                                    class="mt-1 bg-pulse-grey w-75"
                                    style="height: 16px;"
                                >
                                </div>
                            </div>
                            <div
                                class="ml-2 bg-pulse-grey align-self-center"
                                style="height: 16px; width: 20px"
                            >
                            </div>
                        </div>
                    </div>
                    <div
                        class="hidden position-absolute"
                        data-region="confirm-dialogue-container"
                        style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
                    ></div>
                </div>                <div class="border-bottom px-2 py-3" aria-hidden="false"  data-region="view-overview">
                    <div class="d-flex align-items-center">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text pr-2 bg-white">
                                    <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                </span>
                            </div>
                            <input
                                type="text"
                                class="form-control border-left-0"
                                placeholder="Search"
                                aria-label="Search"
                                data-region="view-overview-search-input"
                            >
                        </div>
                        <div class="ml-2">
                            <a
                                href="#"
                                data-route="view-settings"
                                data-route-param="55244"
                                aria-label="Settings"
                                role="button"
                            >
                                <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i>
                            </a>
                        </div>
                    </div>
                    <div class="text-right mt-3">
                        <a href="#" data-route="view-contacts" role="button">
                            <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                            Contacts
                            <span class="badge badge-primary bg-primary ml-2 hidden"
                            data-region="contact-request-count"
                            aria-label="There are 0 pending contact requests">
                                0
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="hidden border-bottom px-2 py-3 view-search"  aria-hidden="true" data-region="view-search">
                    <div class="d-flex align-items-center">
                        <a
                            class="mr-2 align-self-stretch d-flex align-items-center"
                            href="#"
                            data-route-back
                            data-action="cancel-search"
                            role="button"
                        >
                            <div class="icon-back-in-drawer">
                                <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                                <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                            </div>
                            <div class="icon-back-in-app">
                                <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                            </div>                        </a>
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                                aria-label="Search"
                                data-region="search-input"
                            >
                            <div class="input-group-append">
                                <button
                                    class="btn btn-outline-secondary"
                                    type="button"
                                    data-action="search"
                                    aria-label="Search"
                                >
                                    <span data-region="search-icon-container">
                                        <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                    </span>
                                    <span class="hidden" data-region="loading-icon-container">
                                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-settings">
                    <div class="d-flex align-items-center">
                        <div class="align-self-stretch" >
                            <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back role="button">
                                <div class="icon-back-in-drawer">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                                    <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                                </div>
                                <div class="icon-back-in-app">
                                    <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                                </div>                            </a>
                        </div>
                        <div>
                            Settings
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-container position-relative" data-region="body-container">
                
                <div
                    class="hidden"
                    data-region="view-contact"
                    aria-hidden="true"
                >
                    <div class="p-2 pt-3" data-region="content-container"></div>
                </div>                <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="55244">
                    <div class="d-flex flex-column h-100">
                        <div class="p-3 border-bottom">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a
                                        id="contacts-tab-5ecb2c23ed9165ecb2c23e4e6116"
                                        class="nav-link active"
                                        href="#contacts-tab-panel-5ecb2c23ed9165ecb2c23e4e6116"
                                        data-toggle="tab"
                                        data-action="show-contacts-section"
                                        role="tab"
                                        aria-controls="contacts-tab-panel-5ecb2c23ed9165ecb2c23e4e6116"
                                        aria-selected="true"
                                    >
                                        Contacts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        id="requests-tab-5ecb2c23ed9165ecb2c23e4e6116"
                                        class="nav-link"
                                        href="#requests-tab-panel-5ecb2c23ed9165ecb2c23e4e6116"
                                        data-toggle="tab"
                                        data-action="show-requests-section"
                                        role="tab"
                                        aria-controls="requests-tab-panel-5ecb2c23ed9165ecb2c23e4e6116"
                                        aria-selected="false"
                                    >
                                        Requests
                                        <span class="badge badge-primary bg-primary ml-2 hidden"
                                        data-region="contact-request-count"
                                        aria-label="There are 0 pending contact requests">
                                            0
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content d-flex flex-column h-100">
                                            <div
                    class="tab-pane fade show active h-100 lazy-load-list"
                    aria-live="polite"
                    data-region="lazy-load-list"
                    data-user-id="55244"
                                        id="contacts-tab-panel-5ecb2c23ed9165ecb2c23e4e6116"
                    data-section="contacts"
                    role="tabpanel"
                    aria-labelledby="contacts-tab-5ecb2c23ed9165ecb2c23e4e6116"

                >
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        No contacts
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                        
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                    </div>
                </div>
                
                                            <div
                    class="tab-pane fade h-100 lazy-load-list"
                    aria-live="polite"
                    data-region="lazy-load-list"
                    data-user-id="55244"
                                        id="requests-tab-panel-5ecb2c23ed9165ecb2c23e4e6116"
                    data-section="requests"
                    role="tabpanel"
                    aria-labelledby="requests-tab-5ecb2c23ed9165ecb2c23e4e6116"

                >
                    
                    <div class="hidden text-center p-2" data-region="empty-message-container">
                        No contact requests
                    </div>
                    <div class="hidden list-group" data-region="content-container">
                        
                    </div>
                    <div class="list-group" data-region="placeholder-container">
                        
                    </div>
                    <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                        <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                    </div>
                </div>
                        </div>
                    </div>
                </div>                
                <div
                    class="view-conversation hidden h-100"
                    aria-hidden="true"
                    data-region="view-conversation"
                    data-user-id="55244"
                    data-midnight="1590345000"
                    data-message-poll-min="10"
                    data-message-poll-max="120"
                    data-message-poll-after-max="300"
                    style="overflow-y: auto; overflow-x: hidden"
                >
                    <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                        <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                            <div class="py-3 sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                                <p class="m-0">Contact request sent</p>
                                <p class="font-italic font-weight-light" data-region="text"></p>
                            </div>
                            <div class="p-3 text-center hidden" data-region="self-conversation-message-container">
                                <p class="m-0">Personal space</p>
                                <p class="font-italic font-weight-light" data-region="text">Save draft messages, links, notes etc. to access later.</p>
                           </div>
                            <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>
                        </div>
                        <div class="p-4 w-100 h-100 hidden position-absolute" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
                            
                            <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                                <p class="text-muted" data-region="dialogue-text"></p>
                                <div class="mb-2 custom-control custom-checkbox hidden" data-region="delete-messages-for-all-users-toggle-container">
                                    <input type="checkbox" class="custom-control-input" id="delete-messages-for-all-users" data-region="delete-messages-for-all-users-toggle">
                                    <label class="custom-control-label text-muted" for="delete-messages-for-all-users">
                                        Delete for me and for everyone else
                                    </label>
                                </div>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                                    <span data-region="dialogue-button-text">Block</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                                    <span data-region="dialogue-button-text">Unblock</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                                    <span data-region="dialogue-button-text">Remove</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                                    <span data-region="dialogue-button-text">Add</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                                    <span data-region="dialogue-button-text">Delete</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                                    <span data-region="dialogue-button-text">Delete</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                                    <span data-region="dialogue-button-text">Send contact request</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                                    <span data-region="dialogue-button-text">Accept and add to contacts</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                                    <span data-region="dialogue-button-text">Decline</span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                                <button type="button" class="btn btn-primary btn-block" data-action="okay-confirm">OK</button>
                                <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Cancel</button>
                            </div>
                        </div>
                        <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                            <div class="h-100 d-flex flex-column">
                                <div
                                    class="px-2 pb-2 pt-0 bg-light h-100"
                                    style="overflow-y: auto"
                                >
                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                    <div class="mt-4">
                                        <div class="mb-4">
                                            <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                        <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="mr-2">
                                                    <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                                </div>
                                                <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                                <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                            </div>
                                            <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                            <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                        </div>
                                    </div>                                </div>
                            </div>                        </div>
                    </div>
                </div>
                
                <div
                    class="hidden"
                    aria-hidden="true"
                    data-region="view-group-info"
                >
                    <div
                        class="pt-3 h-100 d-flex flex-column"
                        data-region="group-info-content-container"
                        style="overflow-y: auto"
                    ></div>
                </div>                <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview"  data-user-id="55244">
                    <div id="message-drawer-view-overview-container-5ecb2c23ed9165ecb2c23e4e6116" class="d-flex flex-column h-100" style="overflow-y: auto">
                            
                            
                            <div
                                class="section border-0 card"
                                data-region="view-overview-favourites"
                            >
                                <div id="view-overview-favourites-toggle" class="card-header p-0" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                        data-toggle="collapse"
                                        data-target="#view-overview-favourites-target-5ecb2c23ed9165ecb2c23e4e6116"
                                        aria-expanded="false"
                                        aria-controls="view-overview-favourites-target-5ecb2c23ed9165ecb2c23e4e6116"
                                    >
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="font-weight-bold">Starred</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container"
                                        aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                        data-region="section-unread-count"
                                        >
                                            
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="55244"
                                            id="view-overview-favourites-target-5ecb2c23ed9165ecb2c23e4e6116"
            aria-labelledby="view-overview-favourites-toggle"
            data-parent="#message-drawer-view-overview-container-5ecb2c23ed9165ecb2c23e4e6116"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No starred conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div
                                class="section border-0 card"
                                data-region="view-overview-group-messages"
                            >
                                <div id="view-overview-group-messages-toggle" class="card-header p-0" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                        data-toggle="collapse"
                                        data-target="#view-overview-group-messages-target-5ecb2c23ed9165ecb2c23e4e6116"
                                        aria-expanded="false"
                                        aria-controls="view-overview-group-messages-target-5ecb2c23ed9165ecb2c23e4e6116"
                                    >
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="font-weight-bold">Group</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container"
                                        aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                        data-region="section-unread-count"
                                        >
                                            
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="55244"
                                            id="view-overview-group-messages-target-5ecb2c23ed9165ecb2c23e4e6116"
            aria-labelledby="view-overview-group-messages-toggle"
            data-parent="#message-drawer-view-overview-container-5ecb2c23ed9165ecb2c23e4e6116"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No group conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                            
                            
                            <div
                                class="section border-0 card"
                                data-region="view-overview-messages"
                            >
                                <div id="view-overview-messages-toggle" class="card-header p-0" data-region="toggle">
                                    <button
                                        class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                        data-toggle="collapse"
                                        data-target="#view-overview-messages-target-5ecb2c23ed9165ecb2c23e4e6116"
                                        aria-expanded="false"
                                        aria-controls="view-overview-messages-target-5ecb2c23ed9165ecb2c23e4e6116"
                                    >
                                        <span class="collapsed-icon-container">
                                            <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="expanded-icon-container">
                                            <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                        </span>
                                        <span class="font-weight-bold">Private</span>
                                        <small class="hidden ml-1" data-region="section-total-count-container"
                                        aria-label=" total conversations">
                                            (<span data-region="section-total-count"></span>)
                                        </small>
                                        <span class="hidden ml-2" data-region="loading-icon-container">
                                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                        </span>
                                        <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                        data-region="section-unread-count"
                                        >
                                            
                                        </span>
                                    </button>
                                </div>
                                                            <div
                                class="collapse border-bottom  lazy-load-list"
                                aria-live="polite"
                                data-region="lazy-load-list"
                                data-user-id="55244"
                                            id="view-overview-messages-target-5ecb2c23ed9165ecb2c23e4e6116"
            aria-labelledby="view-overview-messages-toggle"
            data-parent="#message-drawer-view-overview-container-5ecb2c23ed9165ecb2c23e4e6116"

                            >
                                
                                <div class="hidden text-center p-2" data-region="empty-message-container">
                                            <p class="text-muted mt-2">No private conversations</p>

                                </div>
                                <div class="hidden list-group" data-region="content-container">
                                    
                                </div>
                                <div class="list-group" data-region="placeholder-container">
                                            <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>

                                </div>
                                <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
                
                <div
                    data-region="view-search"
                    aria-hidden="true"
                    class="h-100 hidden"
                    data-user-id="55244"
                    data-users-offset="0"
                    data-messages-offset="0"
                    style="overflow-y: auto"
                    
                >
                    <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
                        
                        <div class="d-flex flex-column">
                            <div class="mb-3 bg-white" data-region="all-contacts-container">
                                <div data-region="contacts-container"  class="pt-2">
                                    <h4 class="h6 px-2">Contacts</h4>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div data-region="non-contacts-container" class="pt-2 border-top">
                                    <h4 class="h6 px-2">Non-contacts</h4>
                                    <div class="list-group" data-region="list"></div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-link text-primary" data-action="load-more-users">
                                        <span data-region="button-text">Load more</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bg-white" data-region="messages-container">
                                <h4 class="h6 px-2 pt-2">Messages</h4>
                                <div class="list-group" data-region="list"></div>
                                <div class="text-right">
                                    <button class="btn btn-link text-primary" data-action="load-more-messages">
                                        <span data-region="button-text">Load more</span>
                                        <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                    </button>
                                </div>
                            </div>
                            <p class="hidden p-3 text-center" data-region="no-results-container">No results</p>
                        </div>                    </div>
                    <div class="hidden" data-region="loading-placeholder">
                        <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</div>
                    </div>
                    <div class="p-3 text-center" data-region="empty-message-container">
                        <p>Search people and messages</p>
                    </div>
                </div>                
                <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
                    <div class="hidden" data-region="content-container">
                        
                        <div data-region="settings" class="p-3">
                            <h3 class="h6 font-weight-bold">Privacy</h3>
                            <p>You can restrict who can message you</p>
                            <div data-preference="blocknoncontacts" class="mb-3">
                                    <div class="custom-control custom-radio mb-2">
                                        <input
                                            type="radio"
                                            name="message_blocknoncontacts"
                                            class="custom-control-input"
                                            id="block-noncontacts-5ecb2c23ed9165ecb2c23e4e6116-1"
                                            value="1"
                                        >
                                        <label class="custom-control-label ml-2" for="block-noncontacts-5ecb2c23ed9165ecb2c23e4e6116-1">
                                            My contacts only
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio mb-2">
                                        <input
                                            type="radio"
                                            name="message_blocknoncontacts"
                                            class="custom-control-input"
                                            id="block-noncontacts-5ecb2c23ed9165ecb2c23e4e6116-0"
                                            value="0"
                                        >
                                        <label class="custom-control-label ml-2" for="block-noncontacts-5ecb2c23ed9165ecb2c23e4e6116-0">
                                            My contacts and anyone in my courses
                                        </label>
                                    </div>
                            </div>
                        
                            <div class="hidden" data-region="notification-preference-container">
                                <h3 class="mb-2 mt-4 h6 font-weight-bold">Notification preferences</h3>
                            </div>
                        
                            <h3 class="mb-2 mt-4 h6 font-weight-bold">General</h3>
                            <div data-preference="entertosend">
                                <span class="switch">
                                    <input type="checkbox"
                                        id="enter-to-send-5ecb2c23ed9165ecb2c23e4e6116"
                                        
                                    >
                                    <label for="enter-to-send-5ecb2c23ed9165ecb2c23e4e6116">
                                        Use enter to send
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div data-region="placeholder-container">
                        
                        <div class="d-flex flex-column p-3">
                            <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                            <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-3">
                                    <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-4">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                </div>
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                            <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                            <div class="mb-3">
                                <div class="w-100 d-flex mb-2 align-items-center">
                                    <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                                    <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>            </div>
            <div class="footer-container position-relative" data-region="footer-container">
                
                <div
                    class="hidden border-top bg-white position-relative"
                    aria-hidden="true"
                    data-region="view-conversation"
                    data-enter-to-send="0"
                >
                    <div class="hidden p-2" data-region="content-messages-footer-container">
                        
                            <div
                                class="emoji-auto-complete-container w-100 hidden"
                                data-region="emoji-auto-complete-container"
                                aria-live="polite"
                                aria-hidden="true"
                            >
                            </div>
                        <div class="d-flex mt-1">
                            <textarea
                                dir="auto"
                                data-region="send-message-txt"
                                class="form-control bg-light"
                                rows="3"
                                data-auto-rows
                                data-min-rows="3"
                                data-max-rows="5"
                                aria-label="Write a message..."
                                placeholder="Write a message..."
                                style="resize: none"
                            ></textarea>
                        
                            <div class="position-relative d-flex flex-column">
                                    <div
                                        data-region="emoji-picker-container"
                                        class="emoji-picker-container hidden"
                                        aria-hidden="true"
                                    >
                                        
                                        <div
                                            data-region="emoji-picker"
                                            class="card shadow emoji-picker"
                                        >
                                            <div class="card-header px-1 pt-1 pb-0 d-flex justify-content-between flex-shrink-0">
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button selected"
                                                    data-action="show-category"
                                                    data-category="Recent"
                                                    title="Recent"
                                                >
                                                    <i class="icon fa fa-clock-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Smileys & People"
                                                    title="Smileys & people"
                                                >
                                                    <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Animals & Nature"
                                                    title="Animals & nature"
                                                >
                                                    <i class="icon fa fa-leaf fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Food & Drink"
                                                    title="Food & drink"
                                                >
                                                    <i class="icon fa fa-cutlery fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Travel & Places"
                                                    title="Travel & places"
                                                >
                                                    <i class="icon fa fa-plane fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Activities"
                                                    title="Activities"
                                                >
                                                    <i class="icon fa fa-futbol-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Objects"
                                                    title="Objects"
                                                >
                                                    <i class="icon fa fa-lightbulb-o fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Symbols"
                                                    title="Symbols"
                                                >
                                                    <i class="icon fa fa-heart fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                                <button
                                                    class="btn btn-outline-secondary icon-no-margin category-button"
                                                    data-action="show-category"
                                                    data-category="Flags"
                                                    title="Flags"
                                                >
                                                    <i class="icon fa fa-flag fa-fw " aria-hidden="true"  ></i>
                                                </button>
                                            </div>
                                            <div class="card-body p-2 d-flex flex-column overflow-hidden">
                                                <div class="input-group mb-1 flex-shrink-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text pr-0 bg-white text-muted">
                                                            <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                                                        </span>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="form-control border-left-0"
                                                        placeholder="Search"
                                                        aria-label="Search"
                                                        data-region="search-input"
                                                    >
                                                </div>
                                                <div class="flex-grow-1 overflow-auto emojis-container h-100" data-region="emojis-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                                <div class="flex-grow-1 overflow-auto search-results-container h-100 hidden" data-region="search-results-container">
                                                    <div class="position-relative" data-region="row-container"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-footer d-flex flex-shrink-0"
                                                data-region="footer"
                                            >
                                                <div class="emoji-preview" data-region="emoji-preview"></div>
                                                <div data-region="emoji-short-name" class="emoji-short-name text-muted text-wrap ml-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="btn btn-link btn-icon icon-size-3 ml-1"
                                        aria-label="Toggle emoji picker"
                                        data-action="toggle-emoji-picker"
                                    >
                                        <i class="icon fa fa-smile-o fa-fw " aria-hidden="true"  ></i>
                                    </button>
                                <button
                                    class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto"
                                    aria-label="Send message"
                                    data-action="send-message"
                                >
                                    <span data-region="send-icon-container"><i class="icon fa fa-paper-plane fa-fw " aria-hidden="true"  ></i></span>
                                    <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-2" data-region="content-messages-footer-edit-mode-container">
                        
                        <div class="d-flex p-3 justify-content-end">
                            <button
                                class="btn btn-link btn-icon my-1 icon-size-4"
                                data-action="delete-selected-messages"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Delete selected messages"
                            >
                                <span data-region="icon-container"><i class="icon fa fa-trash fa-fw " aria-hidden="true"  ></i></span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                                <span class="sr-only">Delete selected messages</span>
                            </button>
                        </div>                    </div>
                    <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-contact-container">
                        
                        <div class="p-3 bg-white">
                            <p data-region="title"></p>
                            <p class="text-muted" data-region="text"></p>
                            <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                                <span data-region="dialogue-button-text">Send contact request</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-unblock-container">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">You have blocked this user.</p>
                            <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                                <span data-region="dialogue-button-text">Unblock user</span>
                                <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="hidden bg-secondary p-3" data-region="content-messages-footer-unable-to-message">
                        
                        <div class="p-3 bg-white">
                            <p class="text-muted" data-region="text">You are unable to message this user</p>
                        </div>
                    </div>
                    <div class="p-2" data-region="placeholder-container">
                        <div class="d-flex">
                            <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                            <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                        </div>                    </div>
                    <div
                        class="hidden position-absolute"
                        data-region="confirm-dialogue-container"
                        style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
                    ></div>
                </div>                    <div data-region="view-overview" class="text-center">
                        <a href="https://lms.nibmworldwide.com/message/index.php">
                            See all
                        </a>
                    </div>
            </div>
        </div>

</div>
    <footer id="page-footer" class="py-3 bg-dark text-light">
        <div class="container">
            <div id="course-footer"></div>
    
    
            <div class="logininfo">You are logged in as <a href="https://lms.nibmworldwide.com/user/profile.php?id=55244" title="View profile">K.A.A.S. Ranaweera</a> (<a href="https://lms.nibmworldwide.com/login/logout.php?sesskey=Fc4zCnMy9F">Log out</a>)</div>
            <div class="tool_usertours-resettourcontainer"></div>
            <div class="homelink"><a href="https://lms.nibmworldwide.com/">Home</a></div>
            <nav class="nav navbar-nav d-md-none" aria-label="Custom menu">
                    <ul class="list-unstyled pt-3">
                                        <li>Services</li>
                                    <li>
                                        <ul class="list-unstyled ml-3">
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/attendance.php" title="Attendance">Attendance</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/messages.php" title="Messages">Messages</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/management.php" title="Management">Management</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/internet.php" title="Apply for Internet Package">Apply for Internet Package</a></li>
                                                            <li><a href="https://www.nibm.lk/students/exams/repeat"target="_blank" title="Apply for Repeat Examination">Apply for Repeat Examination</a></li>
                                                            <li><a href="https://www.nibm.lk/students/exams/viva"target="_blank" title="Request a Viva Date">Request a Viva Date</a></li>
                                                            <li><a href="https://www.nibm.lk/students/exams/transcript"target="_blank" title="Request a Transcript">Request a Transcript</a></li>
                                                            <li><a href="https://www.nibm.lk/students/exams/participation"target="_blank" title="Request a Participation Letter">Request a Participation Letter</a></li>
                                                            <li><a href="https://nibm.lk/latest-results-2/"target="_blank" title="Final Results">Final Results</a></li>
                                                            <li><a href="https://nibm.lk/payment/"target="_blank" title="Online Payments">Online Payments</a></li>
                                        </ul>
                                    </li>
                                        <li>Library</li>
                                    <li>
                                        <ul class="list-unstyled ml-3">
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=E-Books" title="eBooks">eBooks</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=Emerald" title="Emerald Insight eJournals">Emerald Insight eJournals</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=Harvard" title="Harvard Business Review eJournals and Videos">Harvard Business Review eJournals and Videos</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/guides.php" title="Participant's Guides">Participant's Guides</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=Past-Papers" title="Past Papers">Past Papers</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/library.php?view=Pearson" title="Pearson eBooks">Pearson eBooks</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/terms.php" title="Terms &amp; Conditions">Terms &amp; Conditions</a></li>
                                        </ul>
                                    </li>
                                        <li>Questionnaire</li>
                                    <li>
                                        <ul class="list-unstyled ml-3">
                                                            <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdmvK_NayynPEO0NfXG3bXtkNeJCN2TGkx9aR75JezCCA8A4Q/viewform?usp=sf_link" title="Online Learning Survey">Online Learning Survey</a></li>
                                        </ul>
                                    </li>
                                        <li><a href="https://nibm.lk/blog-2-columns"target="_blank" title="News">News</a></li>
                                        <li><a href="https://www.nibm.lk/payments"target="_blank" title="Pay Online">Pay Online</a></li>
                                        <li><a href="https://lms.nibmworldwide.com/help" title="Help">Help</a></li>
                                    <li>
                                        <ul class="list-unstyled ml-3">
                                                            <li><a href="https://lms.nibmworldwide.com/NIBM LMS Manual - Student.pdf"target="_blank" title="Student User Manual">Student User Manual</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/NIBM LMS Manual - Lecturer.pdf"target="_blank" title="Lecturer User Manual">Lecturer User Manual</a></li>
                                                            <li><a href="https://docs.moodle.org"target="_blank" title="Online Help">Online Help</a></li>
                                                            <li><a href="https://lms.nibmworldwide.com/mod/nibm/contact.php" title="Contact Tutor">Contact Tutor</a></li>
                                                            <li><a href="https://www.nibm.lk/contact-us"target="_blank" title="Contact NIBM">Contact NIBM</a></li>
                                        </ul>
                                    </li>
                    </ul>
            </nav>
            <div class="tool_dataprivacy"><a href="https://lms.nibmworldwide.com/admin/tool/dataprivacy/summary.php">Data retention summary</a></div>
            <script>
//<![CDATA[
var require = {
    baseUrl : 'https://lms.nibmworldwide.com/lib/requirejs.php/1587183851/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://lms.nibmworldwide.com/lib/javascript.php/1587183851/lib/jquery/jquery-3.4.1.min',
        jqueryui: 'https://lms.nibmworldwide.com/lib/javascript.php/1587183851/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://lms.nibmworldwide.com/lib/javascript.php/1587183851/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://lms.nibmworldwide.com/lib/javascript.php/1587183851/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://lms.nibmworldwide.com/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage('en', {
  "Audio Player": "Audio Player",
  "Video Player": "Video Player",
  "Play": "Play",
  "Pause": "Pause",
  "Replay": "Replay",
  "Current Time": "Current Time",
  "Duration": "Duration",
  "Remaining Time": "Remaining Time",
  "Stream Type": "Stream Type",
  "LIVE": "LIVE",
  "Seek to live, currently behind live": "Seek to live, currently behind live",
  "Seek to live, currently playing live": "Seek to live, currently playing live",
  "Loaded": "Loaded",
  "Progress": "Progress",
  "Progress Bar": "Progress Bar",
  "progress bar timing: currentTime={1} duration={2}": "{1} of {2}",
  "Fullscreen": "Fullscreen",
  "Non-Fullscreen": "Non-Fullscreen",
  "Mute": "Mute",
  "Unmute": "Unmute",
  "Playback Rate": "Playback Rate",
  "Subtitles": "Subtitles",
  "subtitles off": "subtitles off",
  "Captions": "Captions",
  "captions off": "captions off",
  "Chapters": "Chapters",
  "Descriptions": "Descriptions",
  "descriptions off": "descriptions off",
  "Audio Track": "Audio Track",
  "Volume Level": "Volume Level",
  "You aborted the media playback": "You aborted the media playback",
  "A network error caused the media download to fail part-way.": "A network error caused the media download to fail part-way.",
  "The media could not be loaded, either because the server or network failed or because the format is not supported.": "The media could not be loaded, either because the server or network failed or because the format is not supported.",
  "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.",
  "No compatible source was found for this media.": "No compatible source was found for this media.",
  "The media is encrypted and we do not have the keys to decrypt it.": "The media is encrypted and we do not have the keys to decrypt it.",
  "Play Video": "Play Video",
  "Close": "Close",
  "Close Modal Dialog": "Close Modal Dialog",
  "Modal Window": "Modal Window",
  "This is a modal window": "This is a modal window",
  "This modal can be closed by pressing the Escape key or activating the close button.": "This modal can be closed by pressing the Escape key or activating the close button.",
  ", opens captions settings dialog": ", opens captions settings dialog",
  ", opens subtitles settings dialog": ", opens subtitles settings dialog",
  ", opens descriptions settings dialog": ", opens descriptions settings dialog",
  ", selected": ", selected",
  "captions settings": "captions settings",
  "subtitles settings": "subititles settings",
  "descriptions settings": "descriptions settings",
  "Text": "Text",
  "White": "White",
  "Black": "Black",
  "Red": "Red",
  "Green": "Green",
  "Blue": "Blue",
  "Yellow": "Yellow",
  "Magenta": "Magenta",
  "Cyan": "Cyan",
  "Background": "Background",
  "Window": "Window",
  "Transparent": "Transparent",
  "Semi-Transparent": "Semi-Transparent",
  "Opaque": "Opaque",
  "Font Size": "Font Size",
  "Text Edge Style": "Text Edge Style",
  "None": "None",
  "Raised": "Raised",
  "Depressed": "Depressed",
  "Uniform": "Uniform",
  "Dropshadow": "Dropshadow",
  "Font Family": "Font Family",
  "Proportional Sans-Serif": "Proportional Sans-Serif",
  "Monospace Sans-Serif": "Monospace Sans-Serif",
  "Proportional Serif": "Proportional Serif",
  "Monospace Serif": "Monospace Serif",
  "Casual": "Casual",
  "Script": "Script",
  "Small Caps": "Small Caps",
  "Reset": "Reset",
  "restore all settings to the default values": "restore all settings to the default values",
  "Done": "Done",
  "Caption Settings Dialog": "Caption Settings Dialog",
  "Beginning of dialog window. Escape will cancel and close the window.": "Beginning of dialog window. Escape will cancel and close the window.",
  "End of dialog window.": "End of dialog window.",
  "{1} is loading.": "{1} is loading."
});

    });
});;
M.util.js_pending('core/search-input'); require(['core/search-input'], function(amd) {amd.init("5ecb2c23e6852"); M.util.js_complete('core/search-input');});;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-5ecb2c23ea03e5ecb2c23e4e617');
    Popover.init(toggle);
});
;

require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
    var root = $('#message-drawer-5ecb2c23ed9165ecb2c23e4e6116');
    MessageDrawer.init(root, '5ecb2c23ed9165ecb2c23e4e6116', false);
});
;

M.util.js_pending('theme_boost/loader');
require(['theme_boost/loader'], function() {
  M.util.js_complete('theme_boost/loader');
});
M.util.js_pending('theme_boost/drawer');
require(['theme_boost/drawer'], function(mod) {
    mod.init();
  M.util.js_complete('theme_boost/drawer');
});
;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(1, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});M.util.js_complete("core/first");
});
//]]>
</script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} alias\/shortcut files that use this file as their source","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":": "}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random5ecb2c23e4e6117'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5ecb2c23e4e6117'); });
})();
//]]>
</script>

        </div>
    </footer>
</div>

</body>
</html>
