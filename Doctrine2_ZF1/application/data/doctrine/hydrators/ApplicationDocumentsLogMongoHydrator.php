<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class ApplicationDocumentsLogMongoHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = (string) $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['transaction_no'])) {
            $value = $data['transaction_no'];
            $return = (string) $value;
            $this->class->reflFields['transaction_no']->setValue($document, $return);
            $hydratedData['transaction_no'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['user_code'])) {
            $value = $data['user_code'];
            $return = (string) $value;
            $this->class->reflFields['user_code']->setValue($document, $return);
            $hydratedData['user_code'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['company_code'])) {
            $value = $data['company_code'];
            $return = (string) $value;
            $this->class->reflFields['company_code']->setValue($document, $return);
            $hydratedData['company_code'] = $return;
        }

        /** @Field(type="timestamp") */
        if (isset($data['datetime'])) {
            $value = $data['datetime'];
            $return = $value;
            $this->class->reflFields['datetime']->setValue($document, $return);
            $hydratedData['datetime'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['priorita'])) {
            $value = $data['priorita'];
            $return = (string) $value;
            $this->class->reflFields['priorita']->setValue($document, $return);
            $hydratedData['priorita'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['log_title'])) {
            $value = $data['log_title'];
            $return = (string) $value;
            $this->class->reflFields['log_title']->setValue($document, $return);
            $hydratedData['log_title'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['log_desc'])) {
            $value = $data['log_desc'];
            $return = (string) $value;
            $this->class->reflFields['log_desc']->setValue($document, $return);
            $hydratedData['log_desc'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['document_root'])) {
            $value = $data['document_root'];
            $return = (string) $value;
            $this->class->reflFields['document_root']->setValue($document, $return);
            $hydratedData['document_root'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['http_accept'])) {
            $value = $data['http_accept'];
            $return = (string) $value;
            $this->class->reflFields['http_accept']->setValue($document, $return);
            $hydratedData['http_accept'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['http_connection'])) {
            $value = $data['http_connection'];
            $return = (string) $value;
            $this->class->reflFields['http_connection']->setValue($document, $return);
            $hydratedData['http_connection'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['http_host'])) {
            $value = $data['http_host'];
            $return = (string) $value;
            $this->class->reflFields['http_host']->setValue($document, $return);
            $hydratedData['http_host'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['http_referer'])) {
            $value = $data['http_referer'];
            $return = (string) $value;
            $this->class->reflFields['http_referer']->setValue($document, $return);
            $hydratedData['http_referer'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['http_user_agent'])) {
            $value = $data['http_user_agent'];
            $return = (string) $value;
            $this->class->reflFields['http_user_agent']->setValue($document, $return);
            $hydratedData['http_user_agent'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['orig_path_info'])) {
            $value = $data['orig_path_info'];
            $return = (string) $value;
            $this->class->reflFields['orig_path_info']->setValue($document, $return);
            $hydratedData['orig_path_info'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['path_info'])) {
            $value = $data['path_info'];
            $return = (string) $value;
            $this->class->reflFields['path_info']->setValue($document, $return);
            $hydratedData['path_info'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['remote_addr'])) {
            $value = $data['remote_addr'];
            $return = (string) $value;
            $this->class->reflFields['remote_addr']->setValue($document, $return);
            $hydratedData['remote_addr'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['remote_host'])) {
            $value = $data['remote_host'];
            $return = (string) $value;
            $this->class->reflFields['remote_host']->setValue($document, $return);
            $hydratedData['remote_host'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['request_method'])) {
            $value = $data['request_method'];
            $return = (string) $value;
            $this->class->reflFields['request_method']->setValue($document, $return);
            $hydratedData['request_method'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['request_time'])) {
            $value = $data['request_time'];
            $return = (string) $value;
            $this->class->reflFields['request_time']->setValue($document, $return);
            $hydratedData['request_time'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['request_uri'])) {
            $value = $data['request_uri'];
            $return = (string) $value;
            $this->class->reflFields['request_uri']->setValue($document, $return);
            $hydratedData['request_uri'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['script_filename'])) {
            $value = $data['script_filename'];
            $return = (string) $value;
            $this->class->reflFields['script_filename']->setValue($document, $return);
            $hydratedData['script_filename'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['script_name'])) {
            $value = $data['script_name'];
            $return = (string) $value;
            $this->class->reflFields['script_name']->setValue($document, $return);
            $hydratedData['script_name'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['server_addr'])) {
            $value = $data['server_addr'];
            $return = (string) $value;
            $this->class->reflFields['server_addr']->setValue($document, $return);
            $hydratedData['server_addr'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['server_name'])) {
            $value = $data['server_name'];
            $return = (string) $value;
            $this->class->reflFields['server_name']->setValue($document, $return);
            $hydratedData['server_name'] = $return;
        }

        /** @Field(type="hash") */
        if (isset($data['post'])) {
            $value = $data['post'];
            $return = $value;
            $this->class->reflFields['post']->setValue($document, $return);
            $hydratedData['post'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['line'])) {
            $value = $data['line'];
            $return = (string) $value;
            $this->class->reflFields['line']->setValue($document, $return);
            $hydratedData['line'] = $return;
        }

        /** @Field(type="hash") */
        if (isset($data['get'])) {
            $value = $data['get'];
            $return = $value;
            $this->class->reflFields['get']->setValue($document, $return);
            $hydratedData['get'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['file'])) {
            $value = $data['file'];
            $return = (string) $value;
            $this->class->reflFields['file']->setValue($document, $return);
            $hydratedData['file'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['function'])) {
            $value = $data['function'];
            $return = (string) $value;
            $this->class->reflFields['function']->setValue($document, $return);
            $hydratedData['function'] = $return;
        }

        /** @Field(type="hash") */
        if (isset($data['session'])) {
            $value = $data['session'];
            $return = $value;
            $this->class->reflFields['session']->setValue($document, $return);
            $hydratedData['session'] = $return;
        }
        return $hydratedData;
    }
}