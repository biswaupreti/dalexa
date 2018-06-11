<?php

namespace Drupal\dalexa\EventSubscriber;

use Drupal\alexa\AlexaEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * An event subscriber for Alexa request events.
 */
class RequestSubscriber implements EventSubscriberInterface
{

    /**
     * Gets the event.
     */
    public static function getSubscribedEvents()
    {
        $events['alexaevent.request'][] = array('onRequest', 0);
        return $events;
    }

}