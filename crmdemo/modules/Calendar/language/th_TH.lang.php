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
 
$mod_strings = array (
	'LBL_MODULE_NAME' => 'ปฏิทิน',
	'LBL_MODULE_NAME_SINGULAR' => 'ปฏิทิน',
	'LBL_MODULE_TITLE' => 'ปฏิทิน',
	'LNK_NEW_CALL' => 'วางกำหนดการโทร',
	'LNK_NEW_MEETING' => 'วางกำหนดการประชุม',
	'LNK_NEW_APPOINTMENT' => 'สร้างการนัดหมาย',
	'LNK_NEW_TASK' => 'สร้างงาน',
	'LNK_CALL_LIST' => 'การโทร',
	'LNK_MEETING_LIST' => 'การประชุม',
	'LNK_TASK_LIST' => 'งาน',
	'LNK_VIEW_CALENDAR' => 'วันนี้',
	'LNK_IMPORT_CALLS' => 'นำเข้าการโทร',
	'LNK_IMPORT_MEETINGS' => 'นำเข้าการประชุม',
	'LNK_IMPORT_TASKS' => 'นำเข้างาน',
	'LBL_MONTH' => 'เดือน',
	'LBL_DAY' => 'วัน',
	'LBL_YEAR' => 'ปี',
	'LBL_WEEK' => 'สัปดาห์',
	'LBL_PREVIOUS_MONTH' => 'เดือนก่อนหน้า',
	'LBL_PREVIOUS_DAY' => 'วันก่อนหน้า',
	'LBL_PREVIOUS_YEAR' => 'ปีก่อนหน้านี้',
	'LBL_PREVIOUS_WEEK' => 'สัปดาห์ก่อนหน้า',
	'LBL_NEXT_MONTH' => 'เดือนถัดไป',
	'LBL_NEXT_DAY' => 'วันถัดไป',
	'LBL_NEXT_YEAR' => 'ปีถัดไป',
	'LBL_NEXT_WEEK' => 'สัปดาห์ถัดไป',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'วางกำหนดการแล้ว',
	'LBL_BUSY' => 'ไม่ว่าง',
	'LBL_CONFLICT' => 'ทับซ้อน',
	'LBL_USER_CALENDARS' => 'ปฏิทินของผู้ใช้',
	'LBL_SHARED' => 'แชร์',
	'LBL_PREVIOUS_SHARED' => 'ก่อนหน้า',
	'LBL_NEXT_SHARED' => 'ถัดไป',
	'LBL_SHARED_CAL_TITLE' => 'ปฏิทินที่แชร์',
	'LBL_USERS' => 'ผู้ใช้',
	'LBL_REFRESH' => 'รีเฟรช',
	'LBL_EDIT_USERLIST' => 'รายชื่อผู้ใช้',
	'LBL_SELECT_USERS' => 'เลือกผู้ใช้สำหรับการแสดงปฏิทิน',
	'LBL_FILTER_BY_TEAM' => 'กรองรายการผู้ใช้ตามทีม:',
	'LBL_ASSIGNED_TO_NAME' => 'ระบุให้',
	'LBL_DATE' => 'วันที่และเวลาเริ่มต้น',  
	'LBL_CREATE_MEETING' => 'วางกำหนดการประชุม',
	'LBL_CREATE_CALL' => 'ล็อกการโทร',
	'LBL_HOURS_ABBREV' => 'ชม.',
	'LBL_MINS_ABBREV' => 'นาที',


	'LBL_YES' => 'ใช่',
	'LBL_NO' => 'ไม่',
	'LBL_SETTINGS' => 'การตั้งค่า',
	'LBL_CREATE_NEW_RECORD' => 'สร้างกิจกรรม',
    'LBL_CREATE_NEW_CALL' => 'สร้างการโทร',
    'LBL_CREATING_NEW_ACTIVITY' => 'คุณกำลังสร้างการประชุมใหม่ คุณต้องการ <a href="javascript:void(0);" data-action="create-task">สร้างงาน</a> หรือ <a href="javascript:void(0);" data-action="schedule-call">วางกำหนดการโทร</a>',
	'LBL_LOADING' => 'กำลังโหลด......',
	'LBL_SAVING' => 'กำลังบันทึก......',
	'LBL_SENDING_INVITES' => 'กำลังบันทึกและส่งคำเชิญ.....',
	'LBL_CONFIRM_REMOVE' => 'คุณแน่ใจหรือไม่ว่าต้องการย้ายระเบียนออก',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'คุณแน่ใจหรือไม่ว่าต้องการย้ายระเบียนที่เกิดซ้ำทั้งหมดออก',
	'LBL_EDIT_RECORD' => 'แก้ไขกิจกรรม',
    'LBL_EDIT_CALL' => 'แก้ไขการโทร',
	'LBL_ERROR_SAVING' => 'เกิดข้อผิดพลาดขณะบันทึก',
    'LBL_NO_ACCESS' => 'คุณไม่มีสิทธิ์เข้าถึง',
	'LBL_ERROR_LOADING' => 'เกิดข้อผิดพลาดขณะโหลด',
	'LBL_GOTO_DATE' => 'ไปที่วันที่',
	'NOTICE_DURATION_TIME' => 'ระยะเวลาต้องมากกว่า 0',
	'LBL_STYLE_BASIC' => 'ขั้นต้น',
	'LBL_STYLE_ADVANCED' => 'ขั้นสูง',

	'LBL_INFO_TITLE' => 'รายละเอียดเพิ่มเติม',
	'LBL_INFO_DESC' => 'คำอธิบาย',
	'LBL_INFO_START_DT' => 'วันที่เริ่มต้น',
	'LBL_INFO_DUE_DT' => 'วันที่ครบกำหนด',
	'LBL_INFO_DURATION' => 'ระยะเวลา',
	'LBL_INFO_NAME' => 'เรื่อง',
	'LBL_INFO_RELATED_TO' => 'เกี่ยวข้องกับ',

	'LBL_NO_USER' => 'ไม่พบข้อมูลที่ตรงกันสำหรับฟิลด์: ระบุให้',
	'LBL_SUBJECT' => 'เรื่อง',
	'LBL_DURATION' => 'ระยะเวลา',
	'LBL_STATUS' => 'สถานะ',
	'LBL_DATE_TIME' => 'วันที่และเวลา',


	'LBL_SETTINGS_TITLE' => 'การตั้งค่า',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'แสดงช่วงเวลาเป็นมุมมองแบบวันและสัปดาห์:',
	'LBL_SETTINGS_TIME_STARTS'=>'เวลาเริ่มต้น:', 
	'LBL_SETTINGS_TIME_ENDS'=>'เวลาสิ้นสุด:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'แสดงการโทร:',
	'LBL_SETTINGS_TASKS_SHOW' => 'แสดงงาน:', 

	'LBL_SAVE_BUTTON' => 'บันทึก',
	'LBL_DELETE_BUTTON' => 'ลบ',
	'LBL_APPLY_BUTTON' => 'ใช้',
	'LBL_SEND_INVITES' => 'บันทึกและส่งคำเชิญ',
	'LBL_CANCEL_BUTTON' => 'ยกเลิก',
	'LBL_CLOSE_BUTTON' => 'ปิด',

	'LBL_GENERAL_TAB' => 'รายละเอียด',
	'LBL_PARTICIPANTS_TAB' => 'ผู้รับเชิญ',
	'LBL_REPEAT_TAB' => 'การเกิดซ้ำ',	
	
	'LBL_REPEAT_TYPE' => 'ซ้ำ',
	'LBL_REPEAT_INTERVAL' => 'ทุก',
	'LBL_REPEAT_END' => 'สิ้นสุด',	
	'LBL_REPEAT_END_AFTER' => 'หลัง',
	'LBL_REPEAT_OCCURRENCES' => 'การเกิดซ้ำ',
	'LBL_REPEAT_END_BY' => 'ตาม',	
	'LBL_REPEAT_DOW' => 'ใน',	
	'LBL_REPEAT_UNTIL' => 'ซ้ำจนถึง',
	'LBL_REPEAT_COUNT' => 'จำนวนรายการที่เกิดซ้ำ',
	'LBL_RECURRING_LIMIT_ERROR' => 'ไม่สามารถวางกำหนดการ $moduleTitle ที่เกิดซ้ำนี้ เนื่องจากเกินจำนวนรายการที่เกิดซ้ำสูงสุดที่กำหนดไว้ $limit รายการ',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'แก้ไขรายการที่เกิดซ้ำทั้งหมด',
	'LBL_REMOVE_ALL_RECURRENCES' => 'ลบรายการที่เกิดซ้ำทั้งหมด',

	'LBL_DATE_END_ERROR' => 'วันที่สิ้นสุดอยู่ก่อนหน้าวันที่เริ่มต้น',
	'ERR_YEAR_BETWEEN' => 'ขออภัย ปฏิทินไม่สามารถรองรับปีที่คุณส่งคำขอ<br>ปีต้องอยู่ระหว่าง 1970 ถึง 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: ไม่ได้กำหนดสำหรับมุมมองนี้',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "จำนวนเหตุการณ์ที่เกิดซ้ำ {0} เกินขีดจำกัด",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} ไม่ใช่เหตุการณ์ที่เกิดซ้ำ",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} ไม่ใช่รายการที่เกิดซ้ำหลัก",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "ระบบไม่รับรู้ {0} เป็นโมดูลเหตุการณ์ที่เกิดซ้ำ",

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"อาทิตย์",
			"จันทร์",
			"อังคาร",
			"พุธ",
			"พฤหัส",
			"ศุกร์",
			"เสาร์",
		),
	'dom_cal_weekdays_long'=>
		array(
			"วันอาทิตย์",
			"วันจันทร์",
			"วันอังคาร",
			"วันพุธ",
			"วันพฤหัสบดี",
			"วันศุกร์",
			"วันเสาร์",
		),
	'dom_cal_month'=>
		array(
			"",
			"ม.ค.",
			"ก.พ.",
			"มี.ค.",
			"เม.ย.",
			"พ.ค.",
			"มิ.ย.",
			"ก.ค.",
			"ส.ค.",
			"ก.ย.",
			"ต.ค.",
			"พ.ย.",
			"ธ.ค.",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"มกราคม",
			"กุมภาพันธ์",
			"มีนาคม",
			"เมษายน",
			"พฤษภาคม",
			"มิถุนายน",
			"กรกฎาคม",
			"สิงหาคม",
			"กันยายน",
			"ตุลาคม",
			"พฤศจิกายน",
			"ธันวาคม",
		),
);
