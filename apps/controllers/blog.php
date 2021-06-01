<?php

if(file_exists(_VIEW_PATH.$lib->lang."/blog.phtml"))  $view=$lib->lang."/blog.phtml";
else  $view=$iniObj->defaultLang."/blog.phtml";