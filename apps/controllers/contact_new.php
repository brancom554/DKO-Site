<?php
$companies = $sqlData->getCompanies()['data'];
// $lib->debug($companies);
if(file_exists(_VIEW_PATH."/customer/contact_new.phtml"))  $view="/customer/contact_new.phtml";
else  $view="/customer/contact_new.phtml";