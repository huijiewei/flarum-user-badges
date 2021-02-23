<?php

namespace V17Development\FlarumBadges\Api\Serializer;

use Flarum\Api\Serializer\AbstractSerializer;
use Flarum\Api\Serializer\UserSerializer;

class BadgeUserSerializer extends AbstractSerializer
{
    /**
     * {@inheritdoc}
     */
    protected $type = 'badgeUser';

    /**
     * {@inheritdoc}
     */
    protected function getDefaultAttributes($badgeUser)
    {
        return [
            'description'   => $badgeUser->description,
            'isPrimary'     => $badgeUser->is_primary,
            'createdAt'     => $this->formatDate($badgeUser->created_at),
        ];
    }

    protected function badge($badge) {
        return $this->hasOne($badge, BadgeSerializer::class);
    }

    protected function user($user) {
        return $this->hasOne($user, UserSerializer::class);
    }
}