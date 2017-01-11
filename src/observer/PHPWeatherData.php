<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 11/01/2017
 * Time: 14:27
 */

namespace HFDP\observer;


use SplObserver;

class PHPWeatherData implements \SplSubject
{

    private $observers;
    private $name;

    public function __construct($name)
    {
        $this->observers = new \SplObjectStorage();
        $this->name = $name;
    }
    /**
     * Attach an SplObserver
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * Detach an observer
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }
    
    public function notify()
    {
        $data = [];
        foreach ($this->observers as $observer) {
            $data[] = $observer->update($this);
        }

        return $data;
    }

    public function getName() {
        return $this->name;
    }
}