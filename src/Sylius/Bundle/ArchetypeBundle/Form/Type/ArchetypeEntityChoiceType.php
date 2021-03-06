<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ArchetypeBundle\Form\Type;

/**
 * Archetype choice form type.
 *
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
class ArchetypeEntityChoiceType extends ArchetypeChoiceType
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'entity';
    }
}
