<?php
declare(ENCODING = 'utf-8');
namespace F3\Planetflow3\ViewHelpers;

/*                                                                        *
 * This script belongs to the FLOW3 package "Planetflow3".                *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License as published by the Free   *
 * Software Foundation, either version 3 of the License, or (at your      *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        *
 * You should have received a copy of the GNU General Public License      *
 * along with the script.                                                 *
 * If not, see http://www.gnu.org/licenses/gpl.html                       *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * A view helper to output the name of a language
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class LanguageNameViewHelper extends \F3\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * 
	 * @param string $language
	 * @param boolean $lowercase
	 * @return string
	 * @author Christopher Hlubek <hlubek@networkteam.com>
	 */
	public function render($language = NULL, $lowercase = FALSE) {
		if ($language === NULL) {
			$language = $this->renderChildren();
		}
		$label = $language;
		switch($language) {
			case 'en':
				$label = 'English';
				break;
			case 'de':
				$label = 'German';
				break;
			case 'fr':
				$label = 'French';
				break;
			case 'es':
				$lable = 'Spanish';
				break;
		}
		if ($lowercase) {
			$label = strtolower($label);
		}
		return $label;
	}

}
?>