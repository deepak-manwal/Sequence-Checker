Sequence-Checker
================

Some computer programs try to prevent easily guessable passwords being used, by rejecting those that do not meet some simple rules. One simple rule is to reject passwords which contain any sequence of letters immediately followed by the same sequence.

There are two solutions in this repository. Both have solution but in different style.

1.logic.php
2.expression.php

Description
================

logic.php
-------

Its logical solution i have created to check sequence in password. I have used simple **for** loops and **array** for this solution. Gives repeted string and its times also.

**Input**

	GOOGLE

**Output**

	GOOGLE Rejected (O is repeated 2 times)

expression.php
-------

Its also a good solution using Regular Expressions. Its faster and simple then logical one and having less lines of code for checking sequence in any String. Its giving satisfactory output but not only giving one thing repeated time's count.

**Input**

	GOOGLE

**Output**

	GOOGLE Rejected (O is repeated)

Note: Both solution is not checking for case sensitive Password, for instance see following:

**Input**

	GoOLE

**Output**

	GoOGLE Accepted, Its a valid password


Reason GoOGLE is Accepted
-------

Its a valid password because both 'o' and 'O' are in different case.
