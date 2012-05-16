<?php

/**
 * BaseProduct
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property clob $tracklist
 * @property string $release_date
 * @property string $pic
 * @property clob $description
 * @property string $soundcloud
 * @property string $prix
 * @property integer $family_id
 * @property Family $Family
 * 
 * @method string  getName()         Returns the current record's "name" value
 * @method clob    getTracklist()    Returns the current record's "tracklist" value
 * @method string  getReleaseDate()  Returns the current record's "release_date" value
 * @method string  getPic()          Returns the current record's "pic" value
 * @method clob    getDescription()  Returns the current record's "description" value
 * @method string  getSoundcloud()   Returns the current record's "soundcloud" value
 * @method string  getPrix()         Returns the current record's "prix" value
 * @method integer getFamilyId()     Returns the current record's "family_id" value
 * @method Family  getFamily()       Returns the current record's "Family" value
 * @method Product setName()         Sets the current record's "name" value
 * @method Product setTracklist()    Sets the current record's "tracklist" value
 * @method Product setReleaseDate()  Sets the current record's "release_date" value
 * @method Product setPic()          Sets the current record's "pic" value
 * @method Product setDescription()  Sets the current record's "description" value
 * @method Product setSoundcloud()   Sets the current record's "soundcloud" value
 * @method Product setPrix()         Sets the current record's "prix" value
 * @method Product setFamilyId()     Sets the current record's "family_id" value
 * @method Product setFamily()       Sets the current record's "Family" value
 * 
 * @package    bwrecords
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProduct extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('tracklist', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
        $this->hasColumn('release_date', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('pic', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
        $this->hasColumn('soundcloud', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('prix', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('family_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Family', array(
             'local' => 'family_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable();
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}