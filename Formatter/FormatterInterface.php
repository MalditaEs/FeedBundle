<?php
/*
 * This file is part of the Eko\FeedBundle Symfony bundle.
 *
 * (c) Vincent Composieux <vincent.composieux@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eko\FeedBundle\Formatter;

use Eko\FeedBundle\Feed\Feed;
use Eko\FeedBundle\Item\Writer\ItemInterface;

/**
 * Formatter interface.
 *
 * This interface contains the methods that a renderer needs to implement
 *
 * @author Vincent Composieux <vincent.composieux@gmail.com>
 */
interface FormatterInterface
{
    /**
     * Sets feed instance.
     *
     * @param Feed $feed
     */
    public function setFeed(Feed $feed);

    /**
     * Initialize XML DOMDocument.
     *
     * @abstract
     */
    public function initialize();

    /**
     * Add an entity item to the feed.
     *
     * @param \DOMElement   $channel The channel DOM element
     * @param ItemInterface $item    An entity object
     */
    public function addItem(\DOMElement $channel, ItemInterface $item);

    /**
     * Returns formatter name.
     *
     * @return string
     */
    public function getName();
}
