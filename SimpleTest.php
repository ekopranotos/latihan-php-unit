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