<?php

if(file_exists(_VIEW_PATH.$lib->lang."/home_page.phtml"))  $view=$lib->lang."/home_page.phtml";
else  $view=$iniObj->defaultLang."/home_page.phtml";