<?php

$layout_defs['Leads']['subpanel_setup']['mu_enquriy_tracker'] =
        array('order' => 149,
            'module' => 'mu_Enquriy_Tracker',
            'subpanel_name' => 'default',
            'get_subpanel_data' => 'function:get_closed_lost_closed_won_opportunities',
			'sort_order' => 'desc',
			'sort_by' => 'date_click',
            'generate_select' => true,
            'title_key' => 'Enquiry Tracker',
            'top_buttons' => array(),
            'function_parameters' => array(
                'import_function_file' => 'custom/modules/Leads/customEnquirySubpanel.php',
           //     'sales_stage' => 'Closed Lost',
                'campaign_id' => $this->_focus->id,
                'return_as_array' => 'true'
            ),
);

?>