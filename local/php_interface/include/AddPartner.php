<?
AddEventHandler("main", "OnAfterUserAdd", Array("AddPatner", "OnAfterUserAddHandler"));
class AddPatner	
{
	public const BUYER = 6;
	public const SELLER = 7;
	public static function OnAfterUserAddHandler(&$arFields)
	{
		if($arFields["ID"] > 0) 
     	{ 
			if($arFields["UF_TYPE_PARTNER"] == 0) 
			{ 
				$arGroups = CUser::GetUserGroup($arFields["ID"]); 
         		$arGroups[] = self::SELLER; 
				CUser::SetUserGroup($arFields["ID"], $arGroups); 
			} 
			else 
			{
				$arGroups = CUser::GetUserGroup($arFields["ID"]); 
         		$arGroups[] = self::BUYER;
				CUser::SetUserGroup($arFields["ID"], $arGroups); 
			} 
		}
	}
}
?>