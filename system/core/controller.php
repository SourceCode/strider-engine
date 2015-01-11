<?php
/**
* @package Strider
* @author Ryan Rentfro & Isaac Mendoza
* @license MIT
*/
namespace Strider;

/**
 * The base Controller class
 */
class Controller
{
    /**
    * Contains Template Data Passed to Twig Template Engine 
    */
    private $templateData = array();

    /**
    * Retrieves a model for a controller to use
    */
    public function getModel($model, $app)
    {
        
    }
    
    /**
    * Render Method for Controller
    */
    public function render($view, Template $template)
    {
        
    }
    
    
    
    public function loadModel($modelName, $controller = null)
    {
        if ($controller != null) $controller .= '/';
        require_once 'application/models/' . $controller . $modelName . '.php';
        // return new model
        $modelName = '\\HAL2\\' . $modelName . 'Model';
        return new $modelName();
    }

    public function render($view, $dataArray = array())
    {
        $twigLoader = new \Twig_Loader_Filesystem(halConfig::$viewStorage);
        $twig = new \Twig_Environment($twigLoader, array('debug' => halConfig::$debugMode));
        if (halConfig::$debugMode)
        {
            $twig->addExtension(new \Twig_Extension_Debug());
        }
        $dataArray['templateJS'] = halTemplate::getJS(); 
        $dataArray['templateCSS'] = halTemplate::getCSS();
        if (halConfig::$debugMode) $dataArray['sessionData'] = $_SESSION; 
        if (is_array($dataArray))
        {
            foreach($dataArray as $key => $value)
            {
                try
                {
                    $this->manageData($key, $value);
                } catch(Exception $e)
                {
                    throw new Exception('Invalid Key Value Pair - ' . $e);
                }
            }
        }

        // render a view while passing the to-be-rendered data
        echo $twig->render($view . '.' . halConfig::$viewFileType, $this->templateData);
    }
    
    public function manageData($key, $value)
    {
        if (empty($key) || empty($value)) return false;
        $this->templateData[$key] = $value;
        return true;    
    }
}