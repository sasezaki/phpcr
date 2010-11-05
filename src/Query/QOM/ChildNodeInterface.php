<?php
declare(ENCODING = 'utf-8');
namespace PHPCR\Query\QOM;

/*                                                                        *
 * This file was ported from the Java JCR API to PHP by                   *
 * Karsten Dambekalns <karsten@typo3.org> for the FLOW3 project.          *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version. Alternatively, you may use the Simplified   *
 * BSD License.                                                           *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Tests whether the selector node is a child of a node reachable by absolute
 * path path.
 *
 * A node-tuple satisfies the constraint only if
 *  selectorNode.getParent().isSame(session.getNode(path))
 * would return true, where selectorNode is the node for the specified selector.
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @license http://opensource.org/licenses/bsd-license.php Simplified BSD License
 * @api
 */
interface ChildNodeInterface extends \PHPCR\Query\QOM\ConstraintInterface {

    /**
     * Gets the name of the selector against which to apply this constraint.
     *
     * @return string the selector name; non-null
     * @api
     */
    public function getSelectorName();

    /**
     * Gets the absolute path.
     *
     * @return string the path; non-null
     * @api
     */
    public function getParentPath();

}