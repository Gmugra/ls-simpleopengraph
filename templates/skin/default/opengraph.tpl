<meta property="og:site_name" content="{cfg name='view.name'}"/>
<meta property="og:locale" content="ru_RU" />
<meta property="og:title" content="{$sHtmlTitle}" />
<meta property="og:url" content="{$sHtmlCanonical}" />
{if isset($oTopic)}
<meta property="og:type" content="article"/>
<meta property="og:description" content="{$oTopic->getTextWitoutHtmlSOG()}"/>
{if Config::Get('plugin.simpleopengraph.use_mainpreview') == true && class_exists("PluginMainpreview") && $oTopic->getPreviewImageWebPath() != null }
<meta property="og:image" content="{$oTopic->getPreviewImageWebPath()}" />
{elseif $oTopic->getFirstImageSOG() != null }
<meta property="og:image" content="{$oTopic->getFirstImageSOG()}" />
{elseif Config::Get('plugin.simpleopengraph.open_graph_default_image')}
<meta property="og:image" content="{cfg name='path.root.web'}{cfg name='plugin.simpleopengraph.open_graph_default_image'}" />
{/if}
<meta property="article:section" content="{$oTopic->getBlog()->getTitle()|escape:'html'}"/>
<meta property="article:published_time" content="{$oTopic->getDateAdd()|date_format:"%Y-%m-%dT%H:%M:%S"}"/>
{$aTags = explode(",",$oTopic->getTags())}
{foreach from=$aTags item=sTag}
<meta property="article:tag" content="{$sTag|escape:'html'}" />
{/foreach}
{else}
<meta property="og:type" content="website"/>
{if Config::Get('plugin.simpleopengraph.open_graph_default_image')}
<meta property="og:image" content="{cfg name='path.root.web'}{cfg name='plugin.simpleopengraph.open_graph_default_image'}" />
{/if}
{/if}