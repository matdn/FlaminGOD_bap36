<?php

namespace ContainerZIAdAHq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1ed6d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1684c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7a7f5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getConnection', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getMetadataFactory', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getExpressionBuilder', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'beginTransaction', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getCache', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'transactional', array('func' => $func), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'commit', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->commit();
    }

    public function rollback()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'rollback', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getClassMetadata', array('className' => $className), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'createQuery', array('dql' => $dql), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'createNamedQuery', array('name' => $name), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'createQueryBuilder', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'flush', array('entity' => $entity), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'clear', array('entityName' => $entityName), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->clear($entityName);
    }

    public function close()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'close', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->close();
    }

    public function persist($entity)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'persist', array('entity' => $entity), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'remove', array('entity' => $entity), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'refresh', array('entity' => $entity), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'detach', array('entity' => $entity), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'merge', array('entity' => $entity), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'contains', array('entity' => $entity), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getEventManager', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getConfiguration', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'isOpen', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getUnitOfWork', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getProxyFactory', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'initializeObject', array('obj' => $obj), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'getFilters', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'isFiltersStateClean', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'hasFilters', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return $this->valueHolder1ed6d->hasFilters();
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

        $instance->initializer1684c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1ed6d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1ed6d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1ed6d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, '__get', ['name' => $name], $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        if (isset(self::$publicProperties7a7f5[$name])) {
            return $this->valueHolder1ed6d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ed6d;

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

        $targetObject = $this->valueHolder1ed6d;
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
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ed6d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1ed6d;
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
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, '__isset', array('name' => $name), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ed6d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1ed6d;
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
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, '__unset', array('name' => $name), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ed6d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1ed6d;
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
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, '__clone', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        $this->valueHolder1ed6d = clone $this->valueHolder1ed6d;
    }

    public function __sleep()
    {
        $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, '__sleep', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;

        return array('valueHolder1ed6d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1684c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1684c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1684c && ($this->initializer1684c->__invoke($valueHolder1ed6d, $this, 'initializeProxy', array(), $this->initializer1684c) || 1) && $this->valueHolder1ed6d = $valueHolder1ed6d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1ed6d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1ed6d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
