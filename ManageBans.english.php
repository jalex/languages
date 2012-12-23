<?php
// Version: 0.1; ManageBans

$txt['ban_general_description'] = 'In this area you can manage bans against users who are troublesome, be it spammers or other miscreants.';
$txt['ban_description_hard'] = 'This area allows you to manage "hard" bans, which stop users straight away and prevent them going further.';
$txt['ban_description_soft'] = 'This area allows you to manage "soft" bans to users, which will not prevent them from using the forum, but it does slow them down and gently discourages them from being troublemakers, with the forum appearing to have technical difficulties occasionally.';
$txt['ban_description_add'] = 'This area allows you to add a new ban to your forum.';
$txt['ban_description_settings'] = 'This area allows you to change the settings that apply to bans, predominantly that affect "soft" bans.';

$txt['ban_type'] = 'Type';
$txt['ban_type_id_member'] = 'Member';
$txt['ban_type_member_name'] = 'Member names';
$txt['ban_type_email'] = 'Email';
$txt['ban_type_ip_address'] = 'IP';
$txt['ban_type_hostname'] = 'Hostname';

$txt['ban_edit'] = 'Edit Ban';

$txt['ban_content'] = 'Banned';
$txt['ban_reason'] = 'Reason for ban';
$txt['ban_added'] = 'Added on';
$txt['ban_added_by'] = 'Added by';
$txt['ban_invalid_member'] = 'User id %1$s was banned but does not exist.';

$txt['ban_id_member_is'] = 'The user: <a href="%1$s">%2$s</a>';

$txt['ban_member_names_beginning'] = 'Member names beginning with %1$s %2$s';
$txt['ban_member_names_ending'] = 'Member names ending with %1$s %2$s';
$txt['ban_member_names_containing'] = 'Member names containing %1$s %2$s';
$txt['ban_member_names_matching'] = 'The member name of: %1$s %2$s';
$txt['ban_member_names_case_matters'] = '(case matters)';

$txt['ban_entire_domain'] = 'Any email from %1$s';
$txt['ban_entire_tld'] = 'Any email from any %1$s domain';
$txt['ban_gmail_style_email'] = 'Any variation of %1$s@%2$s';

$txt['ban_entire_hostname'] = 'Any users from %1$s';

$txt['ban_remove_selected'] = 'Remove selected';
$txt['ban_remove_selected_confirm'] = 'Are you sure you want to remove the selected bans?';

$txt['ban_hardness_header'] = 'The type of ban';
$txt['ban_hardness_title'] = 'What type of ban?';
$txt['ban_hardness_soft'] = 'Soft ban';
$txt['ban_hardness_hard'] = 'Hard ban';
$txt['ban_hardnesses'] = 'Soft bans do not prevent a user from accessing the forum, they just slow the user down, also IP addresses that are soft-banned can be set to disable registration. Meanwhile, hard bans stop the user without any delay.';

$txt['ban_type_header'] = 'Ban criteria';
$txt['ban_type_title'] = 'What should the ban be based on?';
$txt['ban_type_description'] = 'Different options will be available to you depending on the type of ban you want to make.';
$txt['ban_type_title_id_member'] = 'A specific member of the community';
$txt['ban_type_title_member_name'] = 'One or more member names';
$txt['ban_type_title_email'] = 'An email address or email domains';
$txt['ban_type_title_ip_address'] = 'An IP address or range of IP addresses';
$txt['ban_type_title_hostname'] = 'A hostname or range of hostnames';

$txt['ban_type_id_member_type'] = 'Who do you want to ban?';

$txt['ban_type_member_name'] = 'What type of member names do you want to ban?';
$txt['ban_member_names_select_beginning'] = 'Names beginning with:';
$txt['ban_member_names_select_ending'] = 'Names ending with:';
$txt['ban_member_names_select_containing'] = 'Names containing:';
$txt['ban_member_names_select_matching'] = 'Names matching:';

$txt['ban_member_case_sensitive'] = 'Case matters in this?';
$txt['ban_member_case_sensitive_desc'] = 'If case matters, "Admin" is not the same as "admin". Normally you want case not to matter (leave it unticked)';

$txt['ban_type_email_type'] = 'What sort of email do you want to ban?';
$txt['ban_type_email_type_specific'] = 'One or more specific addresses';
$txt['ban_type_email_type_domain'] = 'An entire domain';
$txt['ban_type_email_type_tld'] = 'An entire range of domains';
$txt['ban_type_email_content'] = 'Address(es) to ban';
$txt['ban_email_gmail_style'] = 'GMail style domain?';

$txt['ban_type_ip_address'] = 'What type of IP address do you want to ban?';
$txt['ban_type_ip_range'] = 'Banning a range of IP addresses?';
$txt['ban_type_range_start'] = 'Start:';
$txt['ban_type_range_end'] = 'End:';
$txt['ban_type_ip_address_details'] = 'The IP address(es) to ban:';

$txt['ban_type_hostname'] = 'What hostname do you want to ban?';
$txt['ban_type_hostname_wildcard'] = 'You can use * to indicate anything will be accepted in its place, for example all *.net hostnames, or more selectively something like *.comcast.net, or even *.somebranch.example.com.';

$txt['ban_information'] = 'Notes about the ban';
$txt['ban_reason'] = 'Reason for the ban';
$txt['ban_reason_subtext'] = 'This is required, to remind you later why the ban was added.';
$txt['ban_message'] = 'Message to show to the user';
$txt['ban_message_subtext'] = 'This is optional, and if supplied, will be shown to users who are banned to tell them why.';

$txt['ban_no_modify'] = 'You cannot modify a hostname ban when hostname lookups are disabled.';

$txt['ban_invalid_type'] = 'You did not specify a valid type of ban.';
$txt['ban_invalid_member'] = 'You did not specify a valid member to ban.';
$txt['ban_invalid_membername'] = 'You did not specify a valid name to ban.';
$txt['ban_invalid_ip_address'] = 'You did not specify a valid IP address or range to ban.';
$txt['ban_invalid_hostname'] = 'You did not specify a valid hostname to ban.';

$txt['softban_blankpage'] = 'Chance of a soft-banned user receiving a blank page';
$txt['softban_percent_subtext'] = 'In percentage, from 0 to 100%.';
$txt['softban_nosearch'] = 'Change of a soft-banned user not being able to use search';

?>