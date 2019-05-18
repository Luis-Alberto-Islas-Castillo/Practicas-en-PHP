<?php
ini_set('assert.exception',1);
class ClassError extends AssertionError {}

assert(false, new ClassError('Mensaje de error'));