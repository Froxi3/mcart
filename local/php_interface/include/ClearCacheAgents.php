<?
AddEventHandler('', 'realtorsOnAfterAdd', Array('ClearCacheAgents', 'clearAgentsCache'));
AddEventHandler('', 'realtorsOnAfterUpdate', Array('ClearCacheAgents', 'clearAgentsCache'));
AddEventHandler('', 'realtorsOnAfterDelete', Array('ClearCacheAgents', 'clearAgentsCache'));

class ClearCacheAgents	
{
    public static function clearAgentsCache($event)
    {
        $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
        $taggedCache->clearByTag('hlblock_table_name_realtors');
    }
}

?>