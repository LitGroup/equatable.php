<?php
/**
 * This file is part of the "litgroup/equatable" package.
 *
 * (c) Roman Shamritskiy <roman@litgroup.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LitGroup\Equatable;

/**
 * Marks object as equatable.
 *
 * @author Roman Shamritskiy <roman@litgroup.ru>
 */
interface EquatableInterface
{
    /**
     * Indicates whether some other object is "equal to" this one.
     */
    public function equals(EquatableInterface $other): bool;
}