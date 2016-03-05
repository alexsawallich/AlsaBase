<?php
namespace AlsaBase\Controller;
use \Zend\Mvc\Controller\AbstractActionController as Original;
use Zend\I18n\Translator\TranslatorInterface;

class AbstractActionController extends Original
{
    /**
     * Instance of the application's translator
     * 
     * @var TranslatorInterface
     */
    protected $translator;
    
    /**
     * Facade for using the application translator's translate method.
     * 
     * @param string $message
     * @param string $textDomain
     * @param string $locale
     * @return Ambigous <string, string, NULL, void, boolean, unknown>
     */
    public function translate($message, $textDomain = 'default', $locale = null)
    {
        if (null == $this->translator) {
            $this->translator = $this->getServiceLocator()->get('translator');
        }
        
        return $this->translator->translate($message, $textDomain, $locale);
    }
}
