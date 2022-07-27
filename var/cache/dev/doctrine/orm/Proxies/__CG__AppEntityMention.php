<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Mention extends \App\Entity\Mention implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'cycle', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'ue', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'no', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'code', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'parcours', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'bibliotheques'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'cycle', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'ue', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'no', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'code', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'parcours', '' . "\0" . 'App\\Entity\\Mention' . "\0" . 'bibliotheques'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Mention $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCycle(): ?\App\Entity\Cycle
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCycle', []);

        return parent::getCycle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCycle(?\App\Entity\Cycle $cycle): \App\Entity\Mention
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCycle', [$cycle]);

        return parent::setCycle($cycle);
    }

    /**
     * {@inheritDoc}
     */
    public function getUe(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUe', []);

        return parent::getUe();
    }

    /**
     * {@inheritDoc}
     */
    public function addUe(\App\Entity\Ue $ue): \App\Entity\Mention
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUe', [$ue]);

        return parent::addUe($ue);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUe(\App\Entity\Ue $ue): \App\Entity\Mention
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUe', [$ue]);

        return parent::removeUe($ue);
    }

    /**
     * {@inheritDoc}
     */
    public function getNo(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNo', []);

        return parent::getNo();
    }

    /**
     * {@inheritDoc}
     */
    public function addNo(\App\Entity\Inscrire $no): \App\Entity\Mention
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNo', [$no]);

        return parent::addNo($no);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNo(\App\Entity\Inscrire $no): \App\Entity\Mention
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNo', [$no]);

        return parent::removeNo($no);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): ?\App\Entity\Code
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode(?\App\Entity\Code $code): \App\Entity\Mention
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getParcours(): ?\App\Entity\Parcours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParcours', []);

        return parent::getParcours();
    }

    /**
     * {@inheritDoc}
     */
    public function setParcours(?\App\Entity\Parcours $parcours): \App\Entity\Mention
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParcours', [$parcours]);

        return parent::setParcours($parcours);
    }

    /**
     * {@inheritDoc}
     */
    public function getBibliotheques(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBibliotheques', []);

        return parent::getBibliotheques();
    }

    /**
     * {@inheritDoc}
     */
    public function addBibliotheque(\App\Entity\Bibliotheque $bibliotheque): \App\Entity\Mention
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBibliotheque', [$bibliotheque]);

        return parent::addBibliotheque($bibliotheque);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBibliotheque(\App\Entity\Bibliotheque $bibliotheque): \App\Entity\Mention
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBibliotheque', [$bibliotheque]);

        return parent::removeBibliotheque($bibliotheque);
    }

}
