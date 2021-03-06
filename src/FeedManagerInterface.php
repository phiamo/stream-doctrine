<?php

namespace GetStream\Doctrine;

use GetStream\Stream\Feed;

interface FeedManagerInterface
{
    /**
     * @param string $feed
     * @param string $id
     *
     * @return Feed
     */
    public function getFeed($feed, $id);

    /**
     * @param string $userId
     *
     * @return Feed
     */
    public function getUserFeed($userId);

    /**
     * @param string $userId
     *
     * @return Feed
     */
    public function getNotificationFeed($userId);

    /**
     * @param string $userId
     *
     * @return Feed[]
     */
    public function getNewsFeeds($userId);

    /**
     * @param array $newsFeeds
     *
     * @return $this
     */
    public function setNewsFeeds(array $newsFeeds);

    /**
     * @param string $userId
     * @param string $targetUserId
     */
    public function followUser($userId, $targetUserId);

    /**
     * @param string $userId
     * @param string $targetUserId
     */
    public function unfollowUser($userId, $targetUserId);
}
