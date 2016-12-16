<?php

/**
 * Yaf的启动类
 */
final class Yaf_Application {
    
    /**
     * 配置文件
     * @var mixed
     */
    protected $config ;

    /**
     * [$dispatcher description]
     * @var Yaf_Dispatcher
     */
    protected $dispatcher ;

    /**
     * 
     * @var static
     */
    protected static $_app ;

    /**
     * [$_modules description]
     * @var array
     */
    protected $_modules ;

    /**
     * 
     * @var 
     */
    protected $_running ;

    /**
     * 环境
     * @var string
     */
    protected $_environ ;

    /**
     * 构造函数
     * @param string|array $config 配置数组或者配置文件的路径
     * @param string $envrion 环境
     */
    public function __construct($config, $envrion = NULL){}

    /**
     * 启动框架
     * @return [type] [description]
     */
    public function run(){}

    /**
     * 运行回调函数
     * 
     * @param  callable $entry 一个有效的回调函数
     * @param  mixed $_ 零个或者多个要传递给函数的参数。
     * 
     * @return void
     */
    public function execute(callable $entry, $_ = "..."){}

    /**
     *  获取当前的Yaf_Application实例
     *  
     * @return static
     */
    public static function app(){}

    /**
     * 获取当前Yaf_Application的环境名
     * @return string
     */
    public function environ(){}

    /**
     * 调用bootstrap
     * 
     * @param  Yaf_Bootstrap_Abstract|null $bootstrap [description]
     * @return static
     */
    public function bootstrap(Yaf_Bootstrap_Abstract $bootstrap = NULL){}

    /**
     * 获取 Yaf_Config_Abstract 的实例
     * @return Yaf_Config_Abstract
     */
    public function getConfig(){}

    /**
     * 获取在配置文件中申明的模块
     * @return array
     */
    public function getModules(){}

    /**
     *  获取 Yaf_Dispatcher 的实例
     * @return Yaf_Dispatcher
     */
    public function getDispatcher(){}

    /**
     * [setAppDirectory description]
     * @param string $directory 
     *
     * @return static
     */
    public function setAppDirectory($directory){}

    /**
     * 获取应用的目录
     * @return string
     */
    public function getAppDirectory(){}

    /**
     * 获取最后产生的错误的错误代码
     * @return int
     */
    public function getLastErrorNo(){}

    /**
     * 获取最近产生的错误的错误信息
     * @return string
     */
    public function getLastErrorMsg(){}

    /**
     * 清除最后的错误信息
     * @return [type] [description]
     */
    public function clearLastError(){}

    public function __destruct(){}
    private function __clone(){}
    private function __sleep(){}
    private function __wakeup(){}
}

/**
 * yaf调度程序类
 */
final class Yaf_Dispatcher 
{
    /* 属性 */
    protected $_router ;
    protected $_view ;
    protected $_request ;
    protected $_plugins ;
    protected static $_instance ;
    protected $_auto_render ;
    protected $_return_response ;
    protected $_instantly_flush ;
    protected $_default_module ;
    protected $_default_controller ;
    protected $_default_action ;
    
    public function __construct(){}

    /**
     * 开启/关闭自动渲染功能
     * 
     * @param bool $flag
     * @return static
     */
    public function autoRender($flag){}

    /**
     * 开启/关闭自动异常捕获功能
     * 
     * @param bool $flag
     * @return static
     */
    public function catchException($flag){}
    
    /**
     * 关闭自动渲染
     * 
     * @return bool
     */
    public function disableView(){}

    /**
     * 分发请求
     * 
     * @param  Yaf_Request_Abstract $request 
     * @return Yaf_Response_Abstract
     * 
     */
    public function dispatch(Yaf_Request_Abstract $request){}

    /**
     * 开启自动渲染
     * 
     * @return static
     */
    public function enableView(){}

    /**
     * 打开关闭自动响应
     * 
     * @param bool $flag
     *
     * @return static
     */
    public function flushInstantly($flag){}

    /**
     * 获取当前的Yaf_Application实例
     *
     * @return Yaf_Application
     */
    public function  getApplication(){}

    /**
     * 获取当前的Yaf_Dispatcher实例
     *
     * @return static
     */
    public static function getInstance(){}

    /**
     * 获取当前的请求实例
     * 
     * @return Yaf_Request_Abstract
     */
    public function getRequest(){}

    /**
     * 获取路由器
     * 
     * @return Yaf_Router
     */
    public function getRouter(){}

    /**
     * 初始化视图引擎并返回它
     * 
     * @param string $templates_dir
     * @param array $options
     * @return Yaf_View_Interface
     */
    public function initView($templates_dir, array $options){}

    /**
     * 注册一个插件
     * 
     * @param
     * @return static
     */
    public function registerPlugin (Yaf_Plugin_Abstract $plugin){}

    /**
     * The returnResponse purpose
     * 
     * @param bool $flag
     * 
     * @return static
     */
    public function returnResponse($flag){}

    /**
     * 设置路由的默认动作
     * 
     * @param string $action
     * 
     * @return static
     */
    public function setDefaultAction($action){}

    /**
     * 设置路由的默认控制器
     *  
     * @param string $controller
     * 
     * @return static
     */
    public function setDefaultController($controller){}

    /**
     * 设置路由的默认模块
     * 
     * @param string $module
     * 
     * @return static
     */
    public function setDefaultModule($module){}

    /**
     * 设置错误处理函数
     * 
     * @param callable $callback
     * @param int $error_types
     * 
     * @return static
     */
    public function setErrorHandler(callable $callback , $error_types){}

    /**
     * The setRequest purpose
     * 
     * @param Yaf_Request_Abstract $request
     * 
     * @return static
     */
    public function setRequest(Yaf_Request_Abstract $request){}

    /**
     * 设置视图引擎
     * 
     * @param Yaf_View_Interface $view
     * 
     * @return static
     */
    public function setView(Yaf_View_Interface $view){}

    /**
     * 开启/关闭异常抛出
     * 
     * @param bool $flag
     * 
     * @return static
     */
    public function throwException($flag){}

    private function __sleep(){}
    private function __clone(){}
    private function __wakeup(){}
}

/**
 * yaf配置读写类
 * 
 * Yaf_Config_Ini允许开发者通过嵌套的对象属性语法在应用程序中用熟悉的INI格式存储和读取配置数据。 
 * INI格式在提供拥有配置数据键的等级结构和配置数据节之间的继承能力方面具有专长。 配置数据等级结构通过用点或者句号(.)分离键值。
 * 一个节可以扩展或者通过在节的名称之后带一个冒号(:)和被继承的配置数据的节的名称来从另一个节继承。
 */
class Yaf_Config_Ini extends Yaf_Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable 
{ 
    /* constants */

    /* properties */
    protected $_config = NULL;
    protected $_readonly = "1";

    /* methods */
    /**
     * Yaf_Config_Ini constructor.
     *
     * @param string $config_file 配置文件地址
     * @param null $section 选择部分
     */
    public function __construct($config_file, $section = NULL){}
    public function get($name = NULL){}
    public function set($name, $value){}
    public function count(){}
    public function rewind(){}
    public function current(){}
    public function next(){}
    public function valid(){}
    public function key(){}
    public function toArray(){}
    public function readonly(){}
    public function offsetUnset($name){}
    public function offsetGet($name){}
    public function offsetExists($name){}
    public function offsetSet($name, $value){}
    public function __get($name = NULL){}
    public function __set($name, $value){}
    public function __isset($name){}
}


class Yaf_Config_Simple extends Yaf_Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable 
{ 
    /* constants */

    /* properties */
    protected $_config = NULL;
    protected $_readonly = "";

    /* methods */
    public function __construct($config_file, $section = NULL){}
    public function __isset($name){}
    public function get($name = NULL){}
    public function set($name, $value){}
    public function count(){}
    public function offsetUnset($name){}
    public function rewind(){}
    public function current(){}
    public function next(){}
    public function valid(){}
    public function key(){}
    public function readonly(){}
    public function toArray(){}
    public function __set($name, $value){}
    public function __get($name = NULL){}
    public function offsetGet($name){}
    public function offsetExists($name){}
    public function offsetSet($name, $value){}
}

/**
 * 这是Yaf内建的一个模板引擎，是个简单而快速的模板引擎，只支持PHP脚本
 *
 * Class Yaf_View_Simple
 */
class Yaf_View_Simple implements Yaf_View_Interface {
    /* constants */

    /* properties */
    protected $_tpl_vars = NULL;
    protected $_tpl_dir = NULL;
    protected $_options = NULL;

    /* methods */
    public function __construct($tempalte_dir, array $options = NULL){}
    public function __isset($name){}
    public function get($name = NULL){}
    public function assign($name, $value = NULL){}
    public function render($tpl,array $tpl_vars = NULL){}
    public function eval($tpl_str,array $vars = NULL){}
    public function display($tpl,array $tpl_vars = NULL){}
    public function assignRef($name, &$value){}
    public function clear($name = NULL){}
    public function setScriptPath($template_dir){}
    public function getScriptPath(){}
    public function __get($name = NULL){}
    public function __set($name, $value = NULL){}
}

/**
 * Class Yaf_Loader
 */
class Yaf_Loader {
    /* constants */

    /* properties */
    protected $_local_ns = NULL;
    protected $_library = NULL;
    protected $_global_library = NULL;
    static protected $_instance = NULL;

    /* methods */
    private function __construct(){}
    public function autoload($class_name){}

    /**
     * @param null $local_library_path
     * @param null $global_library_path
     *
     * @return static
     */
    public static function getInstance($local_library_path = NULL, $global_library_path = NULL){}
    public function registerLocalNamespace($name_prefix){}
    public function getLocalNamespace(){}
    public function clearLocalNamespace(){}
    public function isLocalName($class_name){}

    /**
     * 引入一个文件
     * 根路径是application.library
     * 如果没设置application.library 则是 application.directory + '/library'
     * 也可以直接指定从系统根目录开始
     *
     * @param $file
     */
    public static function import($file){}
    public function setLibraryPath($library_path, $is_global = NULL){}
    public function getLibraryPath($is_global = NULL){}

    private function __clone(){}
    private function __sleep(){}
    private function __wakeup(){}
}

/*
 * Plugins 可以让你轻松地定制和扩展框架
 * 插件(Plugins)是一个类。 基于组件定义的类会有所变化 -- 你可能需要去实现这些接口。 但实际上，该插件(Plugin)本身就是一个类。
 * 一个插件(plugin)会被Yaf_Dispatcher::registerPlugin()加载到Yaf框架中， 在框架注册(registerd)后，插件(plugin)类中定义方法将会在恰当的时间被该接口执行。
 */
abstract class Yaf_Plugin_Abstract {
    /* constants */

    /* properties */

    /* methods */
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}
    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}
    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}
    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}
    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}
    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}
    public function preResponse(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}
}

/**
 * yaf 容器
 *
 * Yaf_Registry, 对象注册表(或称对象仓库)是一个用于在整个应用空间(application space)内存储对象和值的容器.
 * 通过把对象存储在其中,我们可以在整个项目的任何地方使用同一个对象.这种机制相当于一种全局存储.
 * 我们可以通过Yaf_Registry类的静态方法来使用对象注册表. 另外,由于该类是一个数组对象,你可以使用数组形式来访问其中的类方法
 *
 * Class Yaf_Registry
 */
class Yaf_Registry {
    /* constants */

    /* properties */
    static protected $_instance = NULL;
    protected $_entries = NULL;

    /* methods */
    private function __construct(){}

    public static function get($name){}
    public static function has($name){}
    public static function set($name, $value){}
    public static function del($name){}

    private function __clone(){}
}

class Yaf_Request_Http extends Yaf_Request_Abstract {
    /* constants */

    /* properties */

    public function __construct(){}
    /* methods */
    public function getQuery(){}
    public function getRequest(){}
    public function getPost(){}
    public function getCookie(){}
    public function getFiles(){}
    public function get(){}
    private function __clone(){}
}

/**
 * 用于测试,模拟请求
 * Class Yaf_Request_Simple
 */
class Yaf_Request_Simple extends Yaf_Request_Abstract {
    /* constants */
    const SCHEME_HTTP = http;
    const SCHEME_HTTPS = https;

    /* properties */
    public $module = NULL;
    public $controller = NULL;
    public $action = NULL;
    public $method = NULL;
    protected $params = NULL;
    protected $language = NULL;
    protected $_exception = NULL;
    protected $_base_uri = "";
    protected $uri = "";
    protected $dispatched = "";
    protected $routed = "";

    /* methods */
    public function __construct(){}
    private function __clone(){}
    public function getQuery(){}
    public function getRequest(){}
    public function getPost(){}
    public function getCookie(){}
    public function getFiles(){}
    public function get(){}
    public function isXmlHttpRequest(){}
    public function isGet(){}
    public function isPost(){}
    public function isPut(){}
    public function isHead(){}
    public function isOptions(){}
    public function isCli(){}
    public function getServer($name, $default = NULL){}
    public function getEnv($name, $default = NULL){}
    public function setParam($name, $value = NULL){}
    public function getParam($name, $default = NULL){}
    public function getParams(){}
    public function getException(){}
    public function getModuleName(){}
    public function getControllerName(){}
    public function getActionName(){}
    public function setModuleName($module){}
    public function setControllerName($controller){}
    public function setActionName($action){}
    public function getMethod(){}
    public function getLanguage(){}
    public function setBaseUri($uir){}
    public function getBaseUri(){}
    public function getRequestUri(){}
    public function setRequestUri($uir){}
    public function isDispatched(){}
    public function setDispatched(){}
    public function isRouted(){}
    public function setRouted($flag = NULL){}
}


abstract class Yaf_Response_Abstract {
    /* constants */

    /* properties */
    protected $_header = NULL;
    protected $_body = NULL;
    protected $_sendheader = "";

    /* methods */
    public function __construct(){}
    public function __destruct(){}
    private function __clone(){}
    private function __toString(){}
    public function setBody(){}
    public function appendBody(){}
    public function prependBody(){}
    public function clearBody(){}
    public function getBody(){}
    public function setHeader(){}
    protected function setAllHeaders(){}
    public function getHeader(){}
    public function clearHeaders(){}
    public function setRedirect(){}
    public function response(){}
}

class Yaf_Response_Http extends Yaf_Response_Abstract {
    /* constants */

    /* properties */
    protected $_header = NULL;
    protected $_body = NULL;
    protected $_sendheader = "1";
    protected $_response_code = "200";

    /* methods */
    public function __construct(){}
    public function __destruct(){}
    private function __clone(){}
    private function __toString() {
        return '';
    }
    public function setBody(){}
    public function appendBody(){}
    public function prependBody(){}
    public function clearBody(){}
    public function getBody(){}
    public function setHeader(){}
    protected function setAllHeaders(){}
    public function getHeader(){}
    public function clearHeaders(){}
    public function setRedirect(){}
    public function response(){}
}

class Yaf_Response_Cli extends Yaf_Response_Abstract {
    /* constants */

    /* properties */
    protected $_header = NULL;
    protected $_body = NULL;
    protected $_sendheader = "";

    /* methods */
    public function __construct(){}
    public function __destruct(){}
    private function __clone(){}
    private function __toString() {
        return '';
    }
    public function setBody(){}
    public function appendBody(){}
    public function prependBody(){}
    public function clearBody(){}
    public function getBody(){}
    public function setHeader(){}
    protected function setAllHeaders(){}
    public function getHeader(){}
    public function clearHeaders(){}
    public function setRedirect(){}
    public function response(){}
}

/**
 * Yaf_Router是标准的框架路由.路由是一个拿到URI端点（URL中的URI的一部分）然后分解参数得到哪一个module, controller, 和action需要接受请求。
 * module, controller, 和action，还有一些其他的参数是打包在一个Yaf_Request_Abstract的对象中，然后通过Yaf_Dispatcher来处理的。
 * 路由只发生一次:最初接到请求并且在第一个controller分发之前。
 * Yaf_Router 是设计来允许使用纯PHP结构的类似功能模块的跳转。
 * 它非常松散的基于Ruby on Rails的路由，并且不需要你提前就知道webserver URL跳转的相关知识。
 * 它是设计来处理一个Apache 跳转模块的规则（一个）
 * Class Yaf_Router
 */
class Yaf_Router {
    /* constants */

    /* properties */
    protected $_routes = NULL;
    protected $_current = NULL;

    /* methods */
    public function __construct(){}
    public function addRoute(){}
    public function addConfig(){}
    public function route(){}
    public function getRoute(){}
    public function getRoutes(){}
    public function getCurrentRoute(){}
}

class Yaf_Route_Static extends Yaf_Router implements Yaf_Route_Interface{
    /* constants */

    /* properties */

    /* methods */
    public function match($uri){}
    public function route(Yaf_Request_Abstract $request){}
    public function assemble ( array $info, array $query ){}
}

class Yaf_Route_Simple implements Yaf_Route_Interface {
    /* constants */

    /* properties */
    protected $controller = NULL;
    protected $module = NULL;
    protected $action = NULL;

    /* methods */
    public function __construct($module_name, $controller_name, $action_name){}
    public function assemble ( array $info, array $query ){}
    public function route(Yaf_Request_Abstract $request){}
}

class Yaf_Route_Supervar implements Yaf_Route_Interface {
    /* constants */

    /* properties */
    protected $_var_name = NULL;

    /* methods */
    public function __construct($supervar_name){}
    public function assemble ( array $info, array $query ){}
    public function route(Yaf_Request_Abstract $request){}
}

class Yaf_Route_Rewrite implements Yaf_Route_Interface {
    /* constants */

    /* properties */
    protected $_route = NULL;
    protected $_default = NULL;
    protected $_verify = NULL;

    /* methods */
    public function __construct($match, array $route, array $verify = NULL){}
    public function assemble ( array $info, array $query ){}
    public function route(Yaf_Request_Abstract $request){}
}

class Yaf_Route_Regex implements Yaf_Route_Interface {
    /* constants */

    /* properties */
    protected $_route = NULL;
    protected $_default = NULL;
    protected $_maps = NULL;
    protected $_verify = NULL;

    /* methods */
    public function __construct($match, array $route, array $map = NULL, array $verify = NULL){}
    public function assemble ( array $info, array $query ){}
    public function route(Yaf_Request_Abstract $request){}
}

class Yaf_Route_Map implements Yaf_Route_Interface {
    /* constants */

    /* properties */
    protected $_ctl_router = "";
    protected $_delimiter = NULL;

    /* methods */
    public function __construct($controller_prefer = NULL, $delimiter = NULL){}
    public function assemble ( array $info, array $query ){}
    public function route(Yaf_Request_Abstract $request){}
}


class Yaf_Session implements Iterator, Traversable, ArrayAccess, Countable {
    /* constants */

    /* properties */
    static protected $_instance = NULL;
    protected $_session = NULL;
    protected $_started = "";

    /* methods */
    private function __construct(){}

    /**
     * @return static
     */
    public static function getInstance(){}

    public function start(){}
    public function get($name){}
    public function has($name){}
    public function set($name, $value){}
    public function del($name){}

    public function count(){}
    public function rewind(){}
    public function next(){}
    public function current(){}
    public function key(){}
    public function valid(){}

    public function offsetGet($name){}
    public function offsetSet($name, $value){}
    public function offsetExists($name){}
    public function offsetUnset($name){}

    public function __get($name){}
    public function __isset($name){}
    public function __set($name, $value){}
    public function __unset($name){}
    private function __clone(){}
    private function __sleep(){}
    private function __wakeup(){}
}

////////////////////////////////////////////////////////////////////////
/// 抽象类
////////////////////////////////////////////////////////////////////////
abstract class Yaf_Bootstrap_Abstract{}

abstract class Yaf_Config_Abstract 
{ 
    /* constants */

    /* properties */
    protected $_config = NULL;
    protected $_readonly = "1";

    /* methods */
    abstract public function get($name = NULL);
    abstract public function set($name, $value);

    /**
     * 检查配置是否只读
     *
     * @return mixed
     */
    abstract public function readonly();
    abstract public function toArray();
}

/*
 * Yaf_Controller_Abstract 是Yaf的MVC体系的核心部分。 MVC是指Model-View-Controller, 是一个用于分离应用逻辑和表现逻辑的设计模式。
 * 每个用户自定义controller都应当继承Yaf_Controller_Abstract。
 * 你会发现在你自己的controller中无法定义__construct方法。因此，Yaf_Controller_Abstract 提供了一个魔术方法Yaf_Controller_Abstract::init()。
 * 如果在你自己的controller里面已经定义了一个init()方法，当你的controller被实例化的时候，它将被调用。
 * Action可能需要参数，当一个请求来到的时候，在路由中如果请求的参数有相同名称的变量（例如：Yaf_Request_Abstract::getParam()）， Yaf将把他们传递给action方法（see Yaf_Action_Abstract::execute()）。
 */
abstract class Yaf_Controller_Abstract
{
    /* constants */

    /* properties */
    /**
     * 动作可以是Yaf_Action_Abstract的关联数组
     * @var array|Yaf_Action_Abstract|null
     */
    public $actions = NULL;

    protected $_module = NULL;
    protected $_name = NULL;
    protected $_request = NULL;
    protected $_response = NULL;
    protected $_invoke_args = NULL;
    protected $_view = NULL;

    final public function __construct(){}

    /**
     * 控制器启动函数,可重载
     */
    public function init(){}

    /**
     * @return Yaf_Request_Abstract
     */
    public function getRequest(){}

    /**
     * @return Yaf_Response_Abstract
     */
    public function getResponse(){}

    /**
     * @return string
     */
    public function getModuleName(){}

    /**
     * 获取当前视图对象
     *
     * @return Yaf_View_Interface
     */
    public function getView(){}

    /**
     * 启动视图并设置视图参数
     * @param array|null $options
     *
     * @return void
     */
    public function initView(array $options = NULL){}

    /**
     * 设置视图根路径
     * @param $view_directory
     */
    public function setViewpath($view_directory){}

    /**
     * 获取视图根路径
     *
     * @return string
     */
    public function getViewpath(){}


    /* methods */
    protected function render($tpl, array $parameters = NULL){}

    /**
     * @param string     $tpl
     * @param array|null $parameters
     *
     * @return bool
     */
    protected function display($tpl, array $parameters = NULL){}

    /**
     * 调用Yaf_Controller_Abstract::forward()以后, 不会直接立即跳转到目的Action执行,
     * 而是会在当前的Action执行完成后, 下一轮的DispatchLoop中, 交给目的Action.
     * 所以, 如果你希望立即跳转到目的Action, 那么请使用return结束当前的执行流程.
     *
     * @param            $module
     * @param null       $controller
     * @param null       $action
     * @param array|null $parameters
     */
    public function forward($module, $controller = NULL, $action = NULL, array $parameters = NULL){}

    /**
     * 302 跳转
     * @param $url
     */
    public function redirect($url){}
    public function getInvokeArgs(){}
    public function getInvokeArg($name){}
    private function __clone(){}
}

/*
 * 在Yaf中一个action可以采用单独定义Yaf_Action_Abstract来实现。 亦即，一个action方法也可以是一个Yaf_Action_Abstract的派生类
 *
 * Yaf需要一个可以被它所调用的入口点
 * （比如PHP 5.3，它有一个新的魔术方法__invoke，但是Yaf不只支持PHP 5.3+，所以Yaf需要另一个魔术方法来执行完成这样的任务），
 * 所以在你自己的动作类里面必须要实现抽象方法 Yaf_Action_Abstract::execute()
 */
abstract class Yaf_Action_Abstract extends Yaf_Controller_Abstract {
    /* constants */

    /* properties */
    /**
     * @var Yaf_Controller_Abstract|null
     */
    protected $_controller = NULL;

    /* methods */
    /**
     * @param mixed $argN 可变参数
     *
     * @return mixed
     */
    abstract public function execute($argN = '...');

    /**
     * @return Yaf_Controller_Abstract
     */
    public function getController(){}
    private function __clone(){}
}


abstract class Yaf_Request_Abstract {
    /* constants */
    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';

    /* properties */
    public $module = NULL;
    public $controller = NULL;
    public $action = NULL;
    public $method = NULL;
    protected $params = NULL;
    protected $language = NULL;
    protected $_exception = NULL;
    protected $_base_uri = "";
    protected $uri = "";
    protected $dispatched = "";
    protected $routed = "";

    /* methods */
    /**
     * @return bool
     */
    public function isGet(){}

    /**
     * @return bool
     */
    public function isPost(){}

    /**
     * @return bool
     */
    public function isPut(){}

    /**
     * @return bool
     */
    public function isHead(){}

    /**
     * @return bool
     */
    public function isOptions(){}

    /**
     * @return bool
     */
    public function isCli(){}

    /**
     * @return bool
     */
    public function isXmlHttpRequest(){}

    /**
     * @param string $name
     * @param null $default
     *
     * @return mixed
     */
    public function getServer($name, $default = NULL){}

    /**
     * @param string $name
     * @param null $default
     *
     * @return mixed
     */
    public function getEnv($name, $default = NULL){}

    /**
     * @param string $name
     * @param string $value
     *
     */
    public function setParam($name, $value = NULL){}

    /**
     * @param      $name
     * @param null $default
     *
     * @return mixed
     */
    public function getParam($name, $default = NULL){}

    /**
     *
     * @return array
     */
    public function getParams(){}

    public function getException(){}

    public function getModuleName(){}
    public function getControllerName(){}
    public function getActionName(){}

    public function setModuleName($module){}
    public function setControllerName($controller){}
    public function setActionName($action){}

    public function getMethod(){}
    public function getLanguage(){}
    public function setBaseUri($uir){}
    public function getBaseUri(){}
    public function getRequestUri(){}
    public function setRequestUri($uir){}
    public function isDispatched(){}
    public function setDispatched(){}
    public function isRouted(){}
    public function setRouted($flag = NULL){}
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// 接口
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * Yaf给用户提供一个了一个可扩展的、可自定的视图引擎接口，用户可以使用自己的视图引擎来代替Yaf内置的Yaf_View_Simple。
 * 下面是一个关于怎么实现的例子，请看Yaf_Dispatcher::setView()。
 *
 * Interface Yaf_View_Interface
 */
interface Yaf_View_Interface
{
    /**
     * @param string $name
     * @param array|null $value
     *
     * @return bool
     */
    public function assign($name, $value = NULL);

    /**
     * @param string $tpl
     * @param array|null $tpl_vars
     *
     * @return bool
     */
    public function display($tpl, array $tpl_vars = NULL);
    public function getScriptPath();

    /**
     * @param string $tpl
     * @param array|null $tpl_vars
     *
     * @return string
     */
    public function  render($tpl, array $tpl_vars = NULL);

    /**
     * @param string $template_dir
     * @return void
     */
    public function setScriptPath($template_dir);
}

interface Yaf_Route_Interface
{
    /**
     * @param array $info
     * @param array $query
     *
     * @return string
     */
    public function assemble(array $info, array $query);

    /**
     * @param Yaf_Request_Abstract $request
     * @return bool
     */
    public function route(Yaf_Request_Abstract $request);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// 异常类
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class Yaf_Exception extends Exception{}

class Yaf_Exception_StartupError extends Yaf_Exception{}

class Yaf_Exception_RouterFailed extends Yaf_Exception{}

class Yaf_Exception_DispatchFailed extends Yaf_Exception{}

class Yaf_Exception_LoadFailed extends Yaf_Exception{}

class Yaf_Exception_LoadFailed_Module extends Yaf_Exception_LoadFailed{}

class Yaf_Exception_LoadFailed_Controller extends Yaf_Exception_LoadFailed{}

class Yaf_Exception_LoadFailed_Action extends Yaf_Exception_LoadFailed{}

class Yaf_Exception_LoadFailed_View extends Yaf_Exception_LoadFailed{}

class Yaf_Exception_TypeError extends Yaf_Exception{}
