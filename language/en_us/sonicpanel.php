<?php
/**
 * en_us language for the Sonicpanel module.
 */
// Basics
$lang['Sonicpanel.name'] = 'SonicPanel';
$lang['Sonicpanel.description'] = 'Allows you to offer shoutcast, icecast, streaming media hosting, AutoDJ, radio reseller from your Dedicated or VPS server.';
$lang['Sonicpanel.module_row'] = 'Server';
$lang['Sonicpanel.module_row_plural'] = 'Servers';
$lang['Sonicpanel.module_group'] = 'Server Group';
$lang['Sonicpanel.tab_stats'] = 'Radio Login Information';
$lang['Sonicpanel.tab_client_actions'] = 'Change Password';
$lang['Sonicpanel.submit'] = 'Submit';

// Tab Stats
$lang['Sonicpanel.tab_stats.info_heading.field'] = 'Field';
$lang['Sonicpanel.tab_stats.info_heading.value'] = 'Value';
$lang['Sonicpanel.tab_stats.info.radiousername'] = 'Radio Username';
$lang['Sonicpanel.tab_stats.info.radiopassword'] = 'Radio Password';
$lang['Sonicpanel.tab_stats.info.ipaddress'] = 'Radio IP';
$lang['Sonicpanel.tab_stats.info.hostname'] = 'Hostname';
$lang['Sonicpanel.tab_stats.info.loginlink'] = 'Radio Login Link';
$lang['Sonicpanel.tab_stats.info.loginbutton'] = 'Radio Login';
// Tab Actions
$lang['Sonicpanel.tab_client_actions.change_password'] = "Change Passwords";
$lang['Sonicpanel.tab_client_actions.radiopassword'] = "New Radio Password";

// Module management
$lang['Sonicpanel.add_module_row'] = 'Add Server';
$lang['Sonicpanel.manage.module_rows_title'] = 'Sonicpanel Servers';
$lang['Sonicpanel.manage.module_rows_heading.name'] = 'Server Label';
$lang['Sonicpanel.manage.module_rows_heading.ipaddress'] = 'IP Address';
$lang['Sonicpanel.manage.module_rows_heading.hostname'] = 'Hostname';
$lang['Sonicpanel.manage.module_rows_heading.options'] = 'Options';
$lang['Sonicpanel.manage.module_groups_heading.name'] = 'Group Name';
$lang['Sonicpanel.manage.module_groups_heading.servers'] = 'Server Count';
$lang['Sonicpanel.manage.module_groups_heading.options'] = 'Options';
$lang['Sonicpanel.manage.module_rows.edit'] = 'Edit';
$lang['Sonicpanel.manage.module_groups.edit'] = 'Edit';
$lang['Sonicpanel.manage.module_rows.delete'] = 'Delete';
$lang['Sonicpanel.manage.module_groups.delete'] = 'Delete';
$lang['Sonicpanel.manage.module_rows.confirm_delete'] = 'Are you sure you want to delete this server?';
$lang['Sonicpanel.manage.module_groups.confirm_delete'] = 'Are you sure you want to delete this server group?';
$lang['Sonicpanel.manage.module_rows_no_results'] = 'There are no servers.';
$lang['Sonicpanel.manage.module_groups_no_results'] = 'There are no server groups.';

$lang['Sonicpanel.order_options.first'] = 'First non-full server';

// Add-Edit Admin Module Page
$lang['Sonicpanel.add_row.addserver'] = 'Add Sonicpanel Server';
$lang['Sonicpanel.add_row.basic_title'] = 'Basic Settings';
$lang['Sonicpanel.add_row.add_btn'] = 'Add Server';

$lang['Sonicpanel.edit_row.editserver'] = 'Edit Sonicpanel Server';
$lang['Sonicpanel.edit_row.basic_title'] = 'Basic Settings';
$lang['Sonicpanel.edit_row.add_btn'] = 'Edit Server';

$lang['Sonicpanel.row_meta.server_name'] = 'SonicPanel Name Label';
$lang['Sonicpanel.row_meta.ipaddress'] = 'SonicPanel Server IP Address';
$lang['Sonicpanel.row_meta.hostname'] = 'SonicPanel Hostname';
$lang['Sonicpanel.row_meta.adminusername'] = 'SonicPanel Username (Root Account / Reseller Account)';
$lang['Sonicpanel.row_meta.adminapikey'] = 'SonicPanel API Key';
$lang['Sonicpanel.row_meta.usessl'] = 'Use SSL (required for certain SonicPanel features)';
$lang['Sonicpanel.row_meta.useproxy'] = 'Use IPv6 to IPv4 Proxy (Useful if Blesta uses IPv6 but SonicPanel does not)';
$lang['Sonicpanel.row_meta.hostname'] = 'SonicPanel Domain Hostname';

// Service fields
$lang['Sonicpanel.service_field.radiousername'] = 'SonicPanel Radio Username';
$lang['Sonicpanel.service_field.radiopassword'] = 'SonicPanel Radio Password';
$lang['Sonicpanel.service_field.radiousername.tooltip'] = 'The username will only be updated locally within Blesta';
$lang['Sonicpanel.service_field.radiopassword.tooltip'] = 'The password will be updated on SonicPanel';
$lang['Sonicpanel.service_field.module_package_error'] = 'No radio package found on specified server! You must first add a package to SonicPanel.';
$lang['Sonicpanel.service_field.module_configoptionmessage'] = 'Use Configurable Option Instead (Recommended)';

// Service info
$lang['Sonicpanel.service_info.ipaddress'] = 'IP Address';
$lang['Sonicpanel.service_info.hostname'] = 'Hostname';
$lang['Sonicpanel.service_info.radiousername'] = 'SonicPanel Radio Username';
$lang['Sonicpanel.service_info.radiopassword'] = 'SonicPanel Radio Password';
$lang['Sonicpanel.service_info.options'] = 'Options';
$lang['Sonicpanel.service_info.option_login'] = 'Log in';

// Errors
$lang['Sonicpanel.!error.adminusername_valid'] = 'You must enter a Username.';
$lang['Sonicpanel.!error.server_name_valid'] = 'You must enter a Server Label.';
$lang['Sonicpanel.!error.ipaddress_valid'] = 'The IP Address appears to be invalid.';
$lang['Sonicpanel.!error.hostname_valid'] = 'The Hostname Address appears to be invalid.';
$lang['Sonicpanel.!error.adminapikey_valid'] = 'The API credentials appear to be invalid.';
$lang['Sonicpanel.!error.api.internal'] = 'An internal error occurred, or the server did not respond to the request.';
$lang['Sonicpanel.!error.module_row.missing'] = 'An internal error occurred. The module row is unavailable.';


$lang['Sonicpanel.!error.radiousername.empty'] = "Username can't be empty.";
$lang['Sonicpanel.!error.radiopassword.valid'] = 'Password must be at least 8 characters in length.';

//Package Fields
$lang['Sonicpanel.package_fields.package'] = 'Package';
$lang['Sonicpanel.!error.meta[package].valid'] = 'Empty SonicPanel Package Set.';
