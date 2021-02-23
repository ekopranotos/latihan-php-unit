# latihan-php-unit
PHPUnit Simple Unit Testing

## Installation
1. Install Composer to your PC and make sure can run properly.
2. Open CMD and make sure it directed to your desirable folder, and then write and run this:
```Composer
composer require phpunit/phpunit
```
![alt text](https://github.com/ekopranotos/latihan-php-unit/blob/main/Install%20PHPUnit.JPG)

4. Check in the folder and it should be like this:<br/>
![alt text](https://github.com/ekopranotos/latihan-php-unit/blob/main/Struktur%20Folder.JPG)

## Create file that want to be tested
1. Make File Wordcount.php. Inside that file write code below:
 ```php
 <?php 

//File: WordCount.php

/**
 * Class WordCount make to explode string to array and count the number of array.
 */
class WordCount
{
	
	public function countWords($sentence)
	{
		return count(explode(" ",$sentence));
	}

	public function countWordsdua($sentencedua)
	{
		return count(explode(" ",$sentencedua));
	}
}

 ?>
 ```
2. Make file Simpletest.php. Inside that file write code below:
```php
<?php 

/**
 * Perform PHP test using PHPUnit 9.5.
 */

use PHPUnit\Framework\TestCase;

require_once "WordCount.php";

class SimpleTest extends TestCase
{
	
	public function testCountWords()
	{
		//use class that we will perfom to test.
		$Wc = new WordCount();

		//input parameter 4 words, it suppose to be 4 as output.
		$TestSentence = "Your Name Is Budi"; //4 words.
		$WordCount = $Wc->countWords($TestSentence);

		//assert equal, expectation is 4 as ouput.
		$this->assertEquals(4, $WordCount);

	}

	public function testCountWordsdua()
	{
		//use class that we will perfom to test.
		$Wc = new WordCount();

		//input parameter 4 words, it suppose to be 5 as output.
		$TestSentencedua = "Your Name Is Budi Gunadi"; //5 words.
		$WordCountdua = $Wc->countWordsdua($TestSentencedua);

		//assert equal, expectation is 4 as ouput.
		$this->assertEquals(5, $WordCountdua);

	}
}

 ?>
```
## Running Test
1. Open CMD, make sure directed to folder that you've been created before.
2. Input this command in CMD and run:
```composer
vendor\bin\phpunit --bootstrap .\vendor\autoload.php .\SimpleTest.php
```
3. the result shoud be like this:<br/>
![alt text](https://github.com/ekopranotos/latihan-php-unit/blob/main/Run%20Test.JPG)

## You can download all that file from this repository. But before run test, make you extracted vendor.rar in same directory and then you can start to run the test.


