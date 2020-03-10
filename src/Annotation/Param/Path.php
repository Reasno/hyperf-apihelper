<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/9
 * Time: 15:45
 * Desc:
 */

declare(strict_types=1);

namespace Hyperf\Apihelper\Annotation\Param;

use Hyperf\Apihelper\Annotation\Params;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
class Path extends Params {

    public $in = 'path';

}