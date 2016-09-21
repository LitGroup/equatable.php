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
 * Makes an object equatable.
 *
 * @author Roman Shamritskiy <roman@litgroup.ru>
 */
interface Equatable
{
    /**
     * Checks if this object is equal to another one.
     */
    public function equals(Equatable $another): bool;
}