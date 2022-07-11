<?php
namespace GDO\DogIRCAutologin;

use GDO\Core\GDO_Module;

final class Module_DogIRCAutologin extends GDO_Module
{
    public function getDependencies() : array { return ['DogAuth', 'DogIRC']; }
    
    public function onLoadLanguage() : void { $this->loadLanguage('lang/autologin'); }
    
}
