<!DOCTYPE HTML>
<html>
<@
	if (!function_exists('fibonacci')) {
		function fibonacci(int $n) : int {
			$arr = [1, 0];
			for ($i = 0; $i < $n; $i++) {
				$arr[($i + 1) % 2] += $arr[$i % 2];
			}
			return $arr[$n % 2];
		}
	}
@>
<head>
	<title>@title</title>
	<meta charset="UTF-8">
</head>

<body>
	@for($c = 0; $c < 20; $c++):
		<p>Fibonacci #@c;: @fibonacci($c);</p>
	@endfor
</body>
	
</html>
