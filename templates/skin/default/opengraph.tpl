<meta property="og:site_name" content="{cfg name='view.name'}"/>
<meta property="og:locale" content="ru_RU" />
<meta property="og:title" content="{$sHtmlTitle|escape:'html'}" />
<meta property="og:url" content="{Router::GetPathWebCurrent()}" />
{if isset($oTopic)}
<meta property="og:type" content="article"/>
<meta property="og:description" content="{$oTopic->getTextWitoutHtmlSOG()|escape:'html'}"/>
{if $oTopic->getFinalImageSOG() != null }
<meta property="og:image" content="{$oTopic->getFinalImageSOG()}"/>
{/if}
<meta property="article:section" content="{$oTopic->getBlog()->getTitle()|escape:'html'}"/>
<meta property="article:published_time" content="{date('c', strtotime($oTopic->getDateAdd()))}"/>
{foreach from=$oTopic->getTagsArray() item=sTag}
<meta property="article:tag" content="{$sTag|escape:'html'}" />
{/foreach}
{else}
<meta property="og:type" content="website"/>
{if Config::Get('plugin.simpleopengraph.open_graph_default_image')}
<meta property="og:image" content="{cfg name='path.root.web'}{cfg name='plugin.simpleopengraph.open_graph_default_image'}" />
{/if}
{/if}