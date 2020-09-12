<?php
namespace GDO\DogIRCAutologin;

use GDO\Core\GDO_Module;

final class Module_DogIRCAutologin extends GDO_Module
{
    public function getDependencies() { return ['DogAuth', 'DogIRC']; }
    
    public function onLoadLanguage() { return $this->loadLanguage('lang/autologin'); }
    
}
