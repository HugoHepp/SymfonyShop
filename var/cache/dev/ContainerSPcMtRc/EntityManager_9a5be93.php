<?php

namespace ContainerSPcMtRc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7aaec = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer04cef = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9581e = [
        
    ];

    public function getConnection()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getConnection', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getMetadataFactory', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getExpressionBuilder', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'beginTransaction', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getCache', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getCache();
    }

    public function transactional($func)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'transactional', array('func' => $func), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->transactional($func);
    }

    public function commit()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'commit', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->commit();
    }

    public function rollback()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'rollback', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getClassMetadata', array('className' => $className), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'createQuery', array('dql' => $dql), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'createNamedQuery', array('name' => $name), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'createQueryBuilder', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'flush', array('entity' => $entity), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'clear', array('entityName' => $entityName), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->clear($entityName);
    }

    public function close()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'close', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->close();
    }

    public function persist($entity)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'persist', array('entity' => $entity), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'remove', array('entity' => $entity), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'refresh', array('entity' => $entity), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'detach', array('entity' => $entity), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'merge', array('entity' => $entity), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getRepository', array('entityName' => $entityName), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'contains', array('entity' => $entity), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getEventManager', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getConfiguration', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'isOpen', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getUnitOfWork', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getProxyFactory', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'initializeObject', array('obj' => $obj), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'getFilters', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'isFiltersStateClean', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'hasFilters', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return $this->valueHolder7aaec->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer04cef = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7aaec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7aaec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7aaec->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, '__get', ['name' => $name], $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        if (isset(self::$publicProperties9581e[$name])) {
            return $this->valueHolder7aaec->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7aaec;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7aaec;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7aaec;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7aaec;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, '__isset', array('name' => $name), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7aaec;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7aaec;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, '__unset', array('name' => $name), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7aaec;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7aaec;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, '__clone', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        $this->valueHolder7aaec = clone $this->valueHolder7aaec;
    }

    public function __sleep()
    {
        $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, '__sleep', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;

        return array('valueHolder7aaec');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer04cef = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer04cef;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer04cef && ($this->initializer04cef->__invoke($valueHolder7aaec, $this, 'initializeProxy', array(), $this->initializer04cef) || 1) && $this->valueHolder7aaec = $valueHolder7aaec;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7aaec;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7aaec;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
