//<?php

$form->addHeader('ipsthemesAdminLoginBG_bgSettings');

/* Default Image */
$form->add( new \IPS\Helpers\Form\Upload( 'ipsthemesAdminLoginBG_default', \IPS\File::get( 'core_Theme', \IPS\Settings::i()->ipsthemesAdminLoginBG_default ), FALSE, array( 'storageExtension' => 'core_Theme', 'multiple' => false, 'image' => TRUE ), NULL, NULL, NULL, 'ipsthemesAdminLoginBG_default' ) );

/* Allow */
$form->add( new \IPS\Helpers\Form\YesNo( 'ipsthemesAdminLoginBG_allow', \IPS\Settings::i()->ipsthemesAdminLoginBG_allow, FALSE, array( 'togglesOn' => array('ipsthemesAdminLoginBG_images') ) ) );

/* Image Options */
$images = array();
foreach(explode(',', \IPS\Settings::i()->ipsthemesAdminLoginBG_images ) as $key) {
    $images[] = \IPS\File::get( 'core_Theme', $key );
}
$form->add( new \IPS\Helpers\Form\Upload( 'ipsthemesAdminLoginBG_images', isset($images) ? $images : null, FALSE, array( 'storageExtension' => 'core_Theme', 'multiple' => true, 'image' => TRUE ), NULL, NULL, NULL, 'ipsthemesAdminLoginBG_images' ) );


if ( $values = $form->values() )
{
	$form->saveAsSettings();
	return TRUE;
}

return $form;