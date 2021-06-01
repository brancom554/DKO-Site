<?php

if(file_exists(_VIEW_PATH.$lib->lang."/login.phtml"))  $view=$lib->lang."/login.phtml";
else  $view=$iniObj->defaultLang."/login.phtml";