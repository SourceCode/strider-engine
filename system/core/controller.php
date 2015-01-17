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
    * Retrieves a model for a controller to use
    * @param string $model The name of the model to load, will have Model appended to the name.
    * @param string $app The app the model resides beneath
    * @param string $namespace The namespace the app exists in
    * @return object Returns the request model if found.
    */
    public function getModel($model, $app, $namespace = 'Strider')
    {
        if ($app != null) $app .= '/';
        require_once 'application/models/' . $controller . $model . '.php';
        $modelName = '\\' . $namespace . '\\' . $model . 'Model';
        return new $modelName(); 
    }
    
    /**
    * Render Method for Controller
    * @param string $view The view to be rendered
    * @param object $template Template object to be rendered 
    */
    public function render($view, Template $template)
    {
        $templateData = $template->toArray();
        $twigLoader = new \Twig_Loader_Filesystem(Config::$viewStorage);
        $twig = new \Twig_Environment($twigLoader, array('debug' => Config::$debugMode));
        if (Config::$debugMode)
        {
            $twig->addExtension(new \Twig_Extension_Debug());
        }
        if (Config::$debugMode) $dataArray['sessionData'] = $_SESSION;
        array_push($templateData, $templateData->toArray());
        echo $twig->render($view . '.' . Config::$viewFileType, $templateData);     
    }
}