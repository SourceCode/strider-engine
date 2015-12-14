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
class Controller extends Router
{
    /**
    * Routes to the application controller
    */
    public function route()
    {
        Globals::init();
        $app = Globals::app();
        $controller = Globals::controller();
        if ($app == null) $app = 'init';
        if ($controller == null) $controller = $app;
        Globals::getInstance();
        Globals::setValue('loadedApp', Config::$filePath . Config::$appStorage . $app . '/controller/' . $controller . '.php');
        require_once(Globals::getValue('loadedApp'));
        $appName = ucfirst(strtolower($app));
        $controllerName = ucfirst(strtolower($controller));
        $applicationPathName = '\Strider\\' . $appName . '\\' . $controllerName;
        $applicationThread = new $applicationPathName();
        $applicationThread->route();     
    }
    
    /**
    * Retrieves a model for a controller to use
    * @param string $model The name of the model to load, will have Model appended to the name.
    * @param string $app The app the model resides beneath
    * @param string $namespace The namespace the app exists in
    * @return object Returns the request model if found.
    */
    public function getModel($model, $app, $namespace = 'Strider')
    {
        $modelFile = Config::$filePath . Config::$appStorage . $app . '/model/' . ucfirst(strtolower($model)) . '.php';     
        if (file_exists($modelFile))
        {
            require_once($modelFile);
            $modelName = '\\' . $namespace . '\\' . ucfirst(strtolower($model)) . 'Model';
            return new $modelName();
        return new $modelName(); 
        } else {
            throw new \Exception('Model does not exist within system.');
        }
    }
    
    /**
    * Render Method for Controller
    * @param string $view The view to be rendered
    * @param object $template Template object to be rendered 
    */
    public function render($view, Template $template)
    {
        $templateData = $template->toArray();
        $app = Globals::app();
        $controller = Globals::controller(); 
        if ($app == null) $app = 'init';
        if ($controller == null) $controller = $app;
        $twigLoader = new \Twig_Loader_Filesystem(Config::$filePath . Config::$appStorage . $app . '/' . Config::$viewStorage);
        $twig = new \Twig_Environment($twigLoader, array('debug' => Config::$debugMode));
        if (Config::$debugMode) $twig->addExtension(new \Twig_Extension_Debug());
        $globals = Globals::toArray();
        $templateData = array_merge($templateData, $globals);
        echo $twig->render($view . '.' . Config::$viewFileType, $templateData);     
    }
}