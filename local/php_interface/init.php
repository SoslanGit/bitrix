<?php
$eventManager = \Bitrix\Main\EventManager::getInstance();

  $eventManager -> AddEventHandler("main", "OnAfterUserAdd", "OnAfterUserAddHandler"); 
   function OnAfterUserAddHandler(&$arFields) 
   { 
     if($arFields["ID"] > 0) 
     { 
       if(strlen($arFields["UF_POKUP"]) > 0)  //Если поле покупателя заполнено 
       { 
         $arGroups = CUser::GetUserGroup($arFields["ID"]); 
         $arGroups[] = 6; //То добаляем пользователя в группу c ID15 
         CUser::SetUserGroup($arFields["ID"], $arGroups); 
       } 
       else 
       { 
         $arGroups = CUser::GetUserGroup($arFields["ID"]); 
         $arGroups[] = 7;  //Если поле продавец заполнено 
         CUser::SetUserGroup($arFields["ID"], $arGroups); 
       } 
     } 
   } 
?>