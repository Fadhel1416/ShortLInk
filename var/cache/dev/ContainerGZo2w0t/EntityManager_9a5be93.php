<?php

namespace ContainerGZo2w0t;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd9180 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4a143 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd44fd = [
        
    ];

    public function getConnection()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getConnection', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getMetadataFactory', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getExpressionBuilder', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'beginTransaction', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getCache', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'transactional', array('func' => $func), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->transactional($func);
    }

    public function commit()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'commit', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->commit();
    }

    public function rollback()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'rollback', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getClassMetadata', array('className' => $className), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'createQuery', array('dql' => $dql), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'createNamedQuery', array('name' => $name), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'createQueryBuilder', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'flush', array('entity' => $entity), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'clear', array('entityName' => $entityName), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->clear($entityName);
    }

    public function close()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'close', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->close();
    }

    public function persist($entity)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'persist', array('entity' => $entity), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'remove', array('entity' => $entity), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'refresh', array('entity' => $entity), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'detach', array('entity' => $entity), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'merge', array('entity' => $entity), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'contains', array('entity' => $entity), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getEventManager', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getConfiguration', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'isOpen', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getUnitOfWork', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getProxyFactory', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'initializeObject', array('obj' => $obj), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'getFilters', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'isFiltersStateClean', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'hasFilters', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return $this->valueHolderd9180->hasFilters();
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

        $instance->initializer4a143 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd9180) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd9180 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd9180->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, '__get', ['name' => $name], $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        if (isset(self::$publicPropertiesd44fd[$name])) {
            return $this->valueHolderd9180->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9180;

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

        $targetObject = $this->valueHolderd9180;
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
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9180;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd9180;
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
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, '__isset', array('name' => $name), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9180;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd9180;
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
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, '__unset', array('name' => $name), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9180;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd9180;
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
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, '__clone', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        $this->valueHolderd9180 = clone $this->valueHolderd9180;
    }

    public function __sleep()
    {
        $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, '__sleep', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;

        return array('valueHolderd9180');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4a143 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4a143;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4a143 && ($this->initializer4a143->__invoke($valueHolderd9180, $this, 'initializeProxy', array(), $this->initializer4a143) || 1) && $this->valueHolderd9180 = $valueHolderd9180;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd9180;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd9180;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
