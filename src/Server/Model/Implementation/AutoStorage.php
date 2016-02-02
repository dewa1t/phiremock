<?php
namespace Mcustiel\Phiremock\Server\Model\Implementation;

use Mcustiel\Phiremock\Server\Domain\Expectation;
use Mcustiel\Phiremock\Server\Model\ExpectationStorage;

class AutoStorage implements ExpectationStorage
{
    /**
     *
     * @var \Mcustiel\Phiremock\Server\Domain\Expectation[]
     */
    private $config;

    public function __construct()
    {
        $this->config = [];
    }

    /**
     *
     * {@inheritDoc}
     *
     * @see \Mcustiel\Phiremock\Server\Model\ExpectatationStorage::addExpectation()
     */
    public function addExpectation(Expectation $expectation)
    {
        $this->config[] = $expectation;
    }

    /**
     *
     * {@inheritDoc}
     *
     * @see \Mcustiel\Phiremock\Server\Model\ExpectatationStorage::listExpectations()
     */
    public function listExpectations()
    {
        return $this->config;
    }

    /**
     *
     * {@inheritDoc}
     *
     * @see \Mcustiel\Phiremock\Server\Model\ExpectatationStorage::clearExpectations()
     */
    public function clearExpectations()
    {
        $this->config = [];
    }
}