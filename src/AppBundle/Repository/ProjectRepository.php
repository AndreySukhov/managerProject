<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Project;

/**
 * ProjectRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return Project
     */
    public function createProject()
    {
        $className = $this->getClassName();

        return new $className();
    }
}
