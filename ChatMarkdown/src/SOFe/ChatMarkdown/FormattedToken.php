<?php

/*
 * simple-plugins
 *
 * Copyright (C) 2018 SOFe
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace SOFe\ChatMarkdown;

class FormattedToken{
	/** @var Format|null */
	private $format;
	/** @var string */
	private $string;

	public function __construct(?Format $format, string $string){
		$this->format = $format;
		$this->string = $string;
	}

	public function getFormat() : ?Format{
		return $this->format;
	}

	public function getString() : string{
		return $this->string;
	}
}
