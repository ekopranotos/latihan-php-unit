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