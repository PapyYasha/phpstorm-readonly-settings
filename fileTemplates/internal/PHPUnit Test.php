<?php
/**
 * Copyright (C) ${YEAR} Proximis
 * 
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
#if (${NAMESPACE})
namespace ${NAMESPACE};

/**
 * @name \\${NAMESPACE}\\${NAME}
 */
#end
class ${NAME} extends#if(${NAMESPACE}) \PHPUnit_Framework_TestCase #else PHPUnit_Framework_TestCase #end
{

}
