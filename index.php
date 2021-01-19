<?php
	
	use App\FizzBuzz;
	
	require_once __DIR__ . '/includes/bootstrap.php';
	$from = $_GET['from'] ?? 1;
	$to = $_GET['to'] ?? 100;
	$items = [];
	
	for ($i = $from; $i <= $to; $i++) {
		$fizzBuzz = new FizzBuzz();
		$items[] = $fizzBuzz->evaluate($i);
	}
	
	echo $twig->render('index.html.twig', compact('from', 'to', 'items'));