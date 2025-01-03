# PHP unset() Unexpected Behavior with References and Null Values

This repository demonstrates an uncommon bug in PHP related to the `unset()` function when used with array references and null values.  The issue involves the unexpected removal of the reference itself, rather than simply setting the referenced value to null.

## Bug Description

When `unset()` is called on a null value that's referenced within an array, the reference is completely removed from the array. This is different from the behavior when unsetting non-referenced null values or other values in general.

## Reproduction

The `bug.php` file contains code that reproduces the issue.  The `bugSolution.php` file provides a potential workaround, showing how the issue can be mitigated.

## Solution

The solution involves checking for references before attempting to unset values. More robust handling of null values in arrays with references is needed.
