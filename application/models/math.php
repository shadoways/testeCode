<?php

	class Math extends CI_Model{
		
		function add($num1, $num2){
			
			return $num1 + $num2;
			
		}
		
		function sub($num1, $num2){
			
			return $num1 - $num2;
			
		}
		
		function mult($num1, $num2){
			
			return $num1 * $num2;
			
		}
		
		function divi($num1, $num2){
			
			return $num1 / $num2;
			
		}
	}