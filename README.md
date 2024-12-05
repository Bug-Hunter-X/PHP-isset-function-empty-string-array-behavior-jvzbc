# PHP isset() function Unexpected Behavior with Empty Strings and Empty Arrays

This repository demonstrates a subtle issue with PHP's `isset()` function.  The `isset()` function is often used to check if a variable is set and is not NULL. However, its behavior can be surprising when dealing with empty strings ('') or empty arrays ([]). 

The `bug.php` file contains code that exhibits this unexpected behavior. The `bugSolution.php` file shows a corrected version that addresses the issue. 

This example highlights the importance of carefully considering the different cases when using `isset()` and the need for potentially more robust checks.