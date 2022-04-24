<?php

namespace Container3DskAfF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder47165 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc2650 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties01b7e = [
        
    ];

    public function getConnection()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getConnection', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getMetadataFactory', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getExpressionBuilder', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'beginTransaction', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getCache', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'transactional', array('func' => $func), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'commit', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->commit();
    }

    public function rollback()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'rollback', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getClassMetadata', array('className' => $className), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'createQuery', array('dql' => $dql), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'createNamedQuery', array('name' => $name), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'createQueryBuilder', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'flush', array('entity' => $entity), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'clear', array('entityName' => $entityName), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->clear($entityName);
    }

    public function close()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'close', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->close();
    }

    public function persist($entity)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'persist', array('entity' => $entity), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'remove', array('entity' => $entity), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'refresh', array('entity' => $entity), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'detach', array('entity' => $entity), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'merge', array('entity' => $entity), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'contains', array('entity' => $entity), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getEventManager', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getConfiguration', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'isOpen', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getUnitOfWork', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getProxyFactory', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'initializeObject', array('obj' => $obj), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'getFilters', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'isFiltersStateClean', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'hasFilters', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return $this->valueHolder47165->hasFilters();
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

        $instance->initializerc2650 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder47165) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder47165 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder47165->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, '__get', ['name' => $name], $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        if (isset(self::$publicProperties01b7e[$name])) {
            return $this->valueHolder47165->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47165;

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

        $targetObject = $this->valueHolder47165;
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
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47165;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder47165;
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
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, '__isset', array('name' => $name), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47165;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder47165;
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
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, '__unset', array('name' => $name), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47165;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder47165;
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
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, '__clone', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        $this->valueHolder47165 = clone $this->valueHolder47165;
    }

    public function __sleep()
    {
        $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, '__sleep', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;

        return array('valueHolder47165');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc2650 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc2650;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc2650 && ($this->initializerc2650->__invoke($valueHolder47165, $this, 'initializeProxy', array(), $this->initializerc2650) || 1) && $this->valueHolder47165 = $valueHolder47165;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder47165;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder47165;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
