<?php

/**
 * BaseContact
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $email
 * @property clob $message
 * 
 * @method string  getEmail()   Returns the current record's "email" value
 * @method clob    getMessage() Returns the current record's "message" value
 * @method Contact setEmail()   Sets the current record's "email" value
 * @method Contact setMessage() Sets the current record's "message" value
 * 
 * @package    bwrecords
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseContact extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contact');
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('message', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}