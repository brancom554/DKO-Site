<?php

if(file_exists(_VIEW_PATH.$lib->lang."/about.phtml"))  $view=$lib->lang."/about.phtml";
else  $view=$iniObj->defaultLang."/about.phtml";