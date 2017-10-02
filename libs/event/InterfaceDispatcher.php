<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 16/8/27
 * Time: 下午12:35
 */

namespace Inhere\LibraryPlus\Event;

/**
 * Interface InterfaceDispatcher
 * @package Inhere\LibraryPlus\Event
 */
interface InterfaceDispatcher
{

    public function addEvent($event);

    /**
     * [on description
     * @example
     * activeName :  update   add   delete  select  render  display   response  request
     * beforeActive: beforeUpdate ... ...
     * afterActive:  afterUpdate ... ...
     * @param  [type] $eventName [description]
     * @param  [type] $event     [description]
     * @return [type]            [description]
     */
    //public function on($event);

    public function removeEvent($event);

    public function hasEvent($event);


}
