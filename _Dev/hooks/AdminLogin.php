//<?php

class hook98 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'login' => 
  array (
    0 => 
    array (
      'selector' => '#elLogin_box',
      'type' => 'add_before',
      'content' => '{{if \IPS\Settings::i()->ipsthemesAdminLoginBG_allow}}
  <div id=\'ipsAdminLoginBG\' class=\'ipsHide ipsPad\'>
      {{$images = explode(\',\',\IPS\Settings::i()->ipsthemesAdminLoginBG_images);}}
      {{$numCols = count($images);}}
      {{if 12 % $numCols == 0}}
          {{$ipsCol = 12 / $numCols;}}
      {{else}}
          {{$ipsCol = floor(12 / $numCols);}}
      {{endif}}	
      <ul class="ipsAdminLoginBGGrid ipsGrid {{if 12 % $numCols !== 0}}ipsGrid_odd{$numCols}{{endif}}" data-controller="plugins.ipsthemesAdminLoginBG">
          {{if count($images) > 0}}
            {{foreach $images as $key => $img}}
                <li class="ipsGrid ipsGrid_span{$ipsCol}">
                    <img data-action="loadIMG" data-url="{$img}" class="img" src="{$img}" />
                </li>
            {{endforeach}}
    	  {{else}}
          	<p class="ipsMessage ipsMessage_info">{lang="ipsthemesAdminLoginBG_noimages"}</p>
          {{endif}}

      </ul>
      <div class="ipsFieldRow ipsClearfix">
        <button data-action="resetIMG" type="submit" class="ipsButton ipsButton_negative ipsPos_right" role="button">{lang="ipsthemesAdminLoginBG_reset"}</button>
      </div>
  </div>

  <a href=\'#ipsAdminLoginBG\' id=\'ipsAdminLoginBGTrigger\' data-ipsTooltip title=\'{lang="ipsthemesAdminLoginBG_desc"}\' data-ipsDialog data-ipsDialog-title="{lang="ipsthemesAdminLoginBG_title"}" data-ipsDialog-content="#ipsAdminLoginBG">
      <i class=\'fa fa-pencil\'></i> {lang="ipsthemesAdminLoginBG_edit"}
  </a>
{{endif}}',
    ),
    1 => 
    array (
      'selector' => 'html > head',
      'type' => 'add_inside_end',
      'content' => '<style>
{template="AdminLoginBG_CSS" group="plugins" location="global" app="core"}
</style>

{{$bgIMG = isset(\IPS\Request::i()->cookie[\'ipsthemesAdminLoginBG\']) ? \IPS\Request::i()->cookie[\'ipsthemesAdminLoginBG\'] : "";}}',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */










}