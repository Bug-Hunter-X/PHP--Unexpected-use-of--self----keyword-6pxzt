# PHP Unexpected use of `self::` keyword
This example demonstrates an uncommon error in PHP where the `self::` keyword, typically used within class methods to refer to the class itself, is mistakenly used in a regular function.  This results in a fatal error.

The `bug.php` file contains the erroneous code, while `bugSolution.php` provides the corrected version.

The error occurs because `self::` requires a class context.  Attempting to use it outside of a class method leads to a fatal error indicating that `self` is not defined.

The solution involves refactoring the code to avoid the unnecessary use of `self::` when the function is not part of a class.
