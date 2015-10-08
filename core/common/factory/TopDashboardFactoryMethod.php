<?php
/**
 * Phanbook : Delightfully simple forum software
 *
 * Licensed under The GNU License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link    http://phanbook.com Phanbook Project
 * @since   1.0.0
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */
namespace Phanbook\Factory;

use Phanbook\Google\Analytic;

/*
*   class FactoryMethod, decide which method must be have
*/
abstract class TopDashboardFactoryMethod
{
    abstract protected function createTopDashboard($dimension);
    abstract protected function create($dimension);
}
