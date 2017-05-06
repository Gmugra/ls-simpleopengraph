<meta property="og:site_name" content="{cfg name='view.name'}"/>
<meta property="og:locale" content="ru_RU" />
<meta property="og:title" content="{$sHtmlTitle}" />
<meta property="og:url" content="{$sHtmlCanonical}" />
{if isset($oTopic)}
<meta property="og:type" content="article"/>
{if $oTopic->getFirstImageSOG() != null }
<meta property="og:image" content="{$oTopic->getFirstImageSOG()}" />
{/if}
<meta property="article:published_time" content="{$oTopic->getDateAdd()|date_format:"%Y-%m-%dT%H:%M:%S"}"/>
{$aTags = explode(",",$oTopic->getTags())}
{foreach from=$aTags item=sTag}
<meta property="article:tag" content="{htmlspecialchars($sTag)}" />
{/foreach}
{else}
<meta property="og:type" content="website"/>
{/if}