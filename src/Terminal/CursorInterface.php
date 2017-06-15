<?php
/**
 * This file is part of graze/console-diff-renderer.
 *
 * Copyright (c) 2017 Nature Delivered Ltd. <https://www.graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/graze/console-diff-renderer/blob/master/LICENSE.md
 * @link    https://github.com/graze/console-diff-renderer
 */

namespace Graze\DiffRenderer\Terminal;

interface CursorInterface
{
    /**
     * Move the cursor to y,x
     *
     * @param int $line
     * @param int $column
     *
     * @return string
     */
    public function move($line, $column);

    /**
     * Move up n Lines
     *
     * @param int $lines
     *
     * @return string
     */
    public function moveUp($lines);

    /**
     * Move down n Lines
     *
     * @param int $lines
     *
     * @return string
     */
    public function moveDown($lines);

    /**
     * Move left n Columns
     *
     * @param int $columns
     *
     * @return string
     */
    public function moveLeft($columns);

    /**
     * Move right n Columns
     *
     * @param int $columns
     *
     * @return string
     */
    public function moveRight($columns);

    /**
     * Erase to the end of the line
     *
     * @return string
     */
    public function eraseToEnd();

    /**
     * Erase to the start of the line
     *
     * @return string
     */
    public function eraseToStart();

    /**
     * Erase Down
     *
     * @return string
     */
    public function eraseDown();

    /**
     * Erase Up
     *
     * @return string
     */
    public function eraseUp();

    /**
     * Erase entire screen
     *
     * @return string
     */
    public function eraseScreen();
}
