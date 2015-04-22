<?php

/**
 * JobeetCategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JobeetCategoryTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object JobeetCategoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JobeetCategory');
    }
    
    public function getWithJobs()
    {
    	$q = $this->createQuery('c')
    	->leftJoin('c.JobeetJobs j')
    	->where('j.expires_at > ?', date('Y-m-d H:i:s', time()));
    
    	$q->andWhere('j.is_activated = ?', 1);
 
    	return $q->execute();
    }
    
	public function doSelectForSlug($parameters)
	{
	  return $this->findOneBySlugAndCulture($parameters['slug'], $parameters['sf_culture']);
	}
	 
	public function findOneBySlugAndCulture($slug, $culture = 'en')
	{
	  $q = $this->createQuery('a')
	    ->leftJoin('a.Translation t')
	    ->andWhere('t.lang = ?', $culture)
	    ->andWhere('t.slug = ?', $slug);
	  return $q->fetchOne();
	}
	 
	public function findOneBySlug($slug)
	{
	  return $this->findOneBySlugAndCulture($slug, 'en');
	}
}