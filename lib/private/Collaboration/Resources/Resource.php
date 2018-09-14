<?php
/**
 * @copyright Copyright (c) 2018 Joas Schilling <coding@schilljs.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OC\Collaboration\Resources;


use OCP\Collaboration\Resources\ICollection;
use OCP\Collaboration\Resources\IResource;

class Resource implements IResource {


	public function getType(): string {
		// TODO: Implement getType() method.
	}

	public function getId(): string {
		// TODO: Implement getId() method.
	}

	public function getName(): string {
		// TODO: Implement getName() method.
	}

	public function getCollection(): ICollection {
		// TODO: Implement getCollection() method.
	}
}
