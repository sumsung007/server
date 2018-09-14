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


use OCP\Collaboration\Resources\ResourceException;
use OCP\Collaboration\Resources\ICollection;
use OCP\Collaboration\Resources\IResource;

class Collection implements ICollection {

	/** @var IResource[] */
	protected $resources;

	public function getResources(): array {
		return $this->resources;
	}

	public function addResource(IResource $resource) {
		array_map(function(IResource $r) use ($resource) {
			if ($this->isSameResource($r, $resource)) {
				throw new ResourceException('Already part of the collection');
			}
		}, $this->resources);

		$this->resources[] = $resource;
	}

	public function removeResource(IResource $resource) {
		$this->resources = array_filter($this->resources, function(IResource $r) use ($resource) {
			return !$this->isSameResource($r, $resource);
		});
	}

	public function deleteAllResources() {
		// TODO: Implement deleteAllResources() method.
	}

	protected function isSameResource(IResource $resource1, IResource $resource2): bool {
		return $resource1->getType() === $resource2->getType() &&
			$resource1->getId() === $resource2->getId();
	}
}
