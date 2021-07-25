<?php
for ($i = 1; isset($hosts[$i - 1]); $i++) {
  $cfg['Servers'][$i]['pmadb'] = '';
  $cfg['Servers'][$i]['bookmarktable'] = false;
  $cfg['Servers'][$i]['relation'] = false;
  $cfg['Servers'][$i]['table_info'] = false;
  $cfg['Servers'][$i]['table_coords'] = false;
  $cfg['Servers'][$i]['pdf_pages'] = false;
  $cfg['Servers'][$i]['column_info'] = false;
  $cfg['Servers'][$i]['history'] = false;
  $cfg['Servers'][$i]['table_uiprefs'] = false;
  $cfg['Servers'][$i]['tracking'] = false;
  $cfg['Servers'][$i]['userconfig'] = false;
  $cfg['Servers'][$i]['recent'] = false;
  $cfg['Servers'][$i]['favorite'] = false;
  $cfg['Servers'][$i]['users'] = false;
  $cfg['Servers'][$i]['usergroups'] = false;
  $cfg['Servers'][$i]['navigationhiding'] = false;
  $cfg['Servers'][$i]['savedsearches'] = false;
  $cfg['Servers'][$i]['central_columns'] = false;
  $cfg['Servers'][$i]['designer_settings'] = false;
  $cfg['Servers'][$i]['export_templates'] = false;
  $cfg['PmaNoRelation_DisableWarning'] = true;
}
?>
