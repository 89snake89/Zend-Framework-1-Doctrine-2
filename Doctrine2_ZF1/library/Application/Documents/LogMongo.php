<?php
namespace Application\Documents;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM; 
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver; 

/**
 * @ODM\Document(db="local", collection="log")
 */
class LogMongo
{
    /**
     * @ODM\Id
     */
    private $id;
    /**
     * @ODM\Field(type="string")
     */
    private $transaction_no;
    /**
     * @ODM\Field(type="string")
     */
    private $user_code;
    /**
     * @ODM\Field(type="string")
     */
    private $company_code;
    /**
     * @ODM\Field(type="timestamp")
     */
    private $datetime;
    /**
     * @ODM\Field(type="string")
     */
    private $priorita;
    /**
     * @ODM\Field(type="string")
     */
    private $log_title;
    /**
     * @ODM\Field(type="string")
     */
    private $log_desc;
    /**
     * @ODM\Field(type="string")
     */
    private $document_root;
    /**
     * @ODM\Field(type="string")
     */
    private $http_accept;
    /**
     * @ODM\Field(type="string")
     */
    private $http_connection;
    /**
     * @ODM\Field(type="string")
     */
    private $http_host;
    /**
     * @ODM\Field(type="string")
     */
    private $http_referer;
    /**
     * @ODM\Field(type="string")
     */
    private $http_user_agent;
    /**
     * @ODM\Field(type="string")
     */
    private $orig_path_info;
    /**
     * @ODM\Field(type="string")
     */
    private $path_info;
    /**
     * @ODM\Field(type="string")
     */
    private $remote_addr;
    /**
     * @ODM\Field(type="string")
     */
    private $remote_host;
    /**
     * @ODM\Field(type="string")
     */
    private $request_method;
    /**
     * @ODM\Field(type="string")
     */
    private $request_time;
    /**
     * @ODM\Field(type="string")
     */
    private $request_uri;
    /**
     * @ODM\Field(type="string")
     */
    private $script_filename;
    /**
     * @ODM\Field(type="string")
     */
    private $script_name;
    /**
     * @ODM\Field(type="string")
     */
    private $server_addr;
    /**
     * @ODM\Field(type="string")
     */
    private $server_name;
    /**
     * @ODM\Field(type="hash")  
     */
    private $post;
    /**
     * @ODM\Field(type="string")
     */
    private $line;
    /**
     * @ODM\Field(type="hash")  
     */
    private $get;
    /**
     * @ODM\Field(type="string")
     */
    private $file;
    /**
     * @ODM\Field(type="string")
     */
    private $function;
    /**
     * @ODM\Field(type="hash")  
     */
    private $session = array();
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getTransactionID()
    {
        return $this->transaction_no;
    }
    
    public function setTransactionID($transaction_no)
    {
        $this->transaction_no = (string) $transaction_no;
    }
    
    public function getUserCode()
    {
        return $this->user_code;
    }
    
    public function setUserCode($user_code)
    {
        $this->user_code = (string) $user_code;
    }
    
    public function getCompanyCode()
    {
        return $this->company_code;
    }
    
    public function setCompanyCode($company_code)
    {
        $this->company_code = (string) $company_code;
    }
    
    public function getDatetime()
    {
        return $this->datetime;
    }
    
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }
    
    public function getPriorita()
    {
        return $this->priorita;
    }
     
    public function setPriorita($priorita)
    {
        $this->priorita = (string) $priorita;
    }
    
    public function getLogTitle()
    {
        return $this->log_title;
    }
    
    public function setLogTitle($log_title)
    {
        $this->log_title = (string) $log_title;
    }
    
    public function getLogDesc()
    {
        return $this->log_desc;
    }

    public function setLogDesc($log_desc)
    {
        $this->log_desc = (string) $log_desc;
    }
    
    public function getDocumentRoot()
    {
        return $this->document_root;
    }
    
    public function setDocumentRoot($document_root)
    {
        $this->document_root = (string) $document_root;
    }
    
    public function getHttpAccept()
    {
        return $this->http_accept;
    }

    public function setHttpAccept($http_accept)
    {
        $this->http_accept = (string) $http_accept;
    }
    
    public function getHttpConnection()
    {
        return $this->http_connection;
    }
    
    public function setHttpConnection($http_connection)
    {
        $this->http_connection = (string) $http_connection;
    }
    
    public function getHttpHost()
    {
        return $this->http_host;
    }
    
    public function setHttpHost($http_host)
    {
        $this->http_host = (string) $http_host;
    }
    
    public function getHttpReferer()
    {
        return $this->http_referer;
    }
    
    public function setHttpReferer($http_referer)
    {
        $this->http_referer = (string) $http_referer;
    }
    
    public function getHttpUserAgent()
    {
        return $this->http_user_agent;
    }
    
    public function setHttpUserAgent($http_user_agent)
    {
        $this->http_user_agent = (string) $http_user_agent;
    }
    
    public function getOrigPathInfo()
    {
        return $this->orig_path_info;
    }
    
    public function setOrigPathInfo($orig_path_info)
    {
        $this->orig_path_info = (string) $orig_path_info;
    }
    
    public function getPathInfo()
    {
        return $this->path_info;
    }

    public function setPathInfo($path_info)
    {
        $this->path_info = (string) $path_info;
    }
    
    public function getRemoteAddr()
    {
        return $this->remote_addr;
    }
    
    public function setRemoteAddr($remote_addr)
    {
        $this->remote_addr = (string) $remote_addr;
    }
    
    public function getRemoteHost()
    {
        return $this->remote_host;
    }
    
    public function setRemoteHost($remote_host)
    {
        $this->remote_host = (string) $remote_host;
    }
    
    public function getRequestMethod()
    {
        return $this->request_method;
    }
    
    public function setRequestMethod($request_method)
    {
        $this->request_method = (string) $request_method;
    }
    
    public function getRequestTime()
    {
        return $this->request_time;
    }

    public function setRequestTime($request_time)
    {
        $this->request_time = (string) $request_time;
    }
    
    public function getRequestUri()
    {
        return $this->request_uri;
    }
    
    public function setRequestUri($request_uri)
    {
        $this->request_uri = (string) $request_uri;
    }
    
    public function getScriptFilename()
    {
        return $this->script_filename;
    }
  
    public function setScriptFilename($script_filename)
    {
        $this->script_filename = (string) $script_filename;
    }
    
    public function getScriptName()
    {
        return $this->script_name;
    }
    
    public function setScriptName($script_name)
    {
        $this->script_name = (string) $script_name;
    }
    
    public function getServerAddr()
    {
        return $this->server_addr;
    }
    public function setServerAddr($server_Addr)
    {
        $this->server_addr = (string) $server_Addr;
    }
    
    public function getServerName()
    {
        return $this->server_name;
    }
    
    public function setServerName($server_name)
    {
        $this->server_name = (string) $server_name;
    }
    
    public function getPost()
    {
        return $this->post;
    }
    
    public function setPost($post)
    {
        $this->post = $post;
    }
    
    public function getLine()
    {
        return $this->line;
    }
    
    public function setLine($line)
    {
        $this->line = (string) $line;
    }
    
    public function getGet()
    {
        return $this->get;
    }
    
    public function setGet($get)
    {
        $this->get = $get;
    }
    
    public function getFile()
    {
        return $this->file;
    }
    
    public function setFile($file)
    {
        $this->file = (string) $file;
    }
    
    public function getFunction()
    {
        return $this->function;
    }
    
    public function setFunction($function)
    {
        $this->function = (string) $function;
    }
    
    public function getSession()
    {
        return $this->session;
    }
    public function setSession($session)
    {
        $this->session =  $session;
    }    
    
}