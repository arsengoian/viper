<!DOCTYPE html>
<@
	$array123 = [2,4,6];
	/*
	function times2($i) {
		return $i * 2;
	}
	*/
	$black = 'black';
@>
<html>
	<head>
		<style>
			td {
				border: 1px solid @black;
			}
		</style>
    </head>
    <body>
        <table class="container">
        	@for($i = 0; $i < 15; $i++):
		        <tr class="content">
					@foreach(range(0, $i) as $k):
						<td>@k</td>
					@endforeach;
		        </tr>
            @endfor
        </table>
        <section>
        	@count($array123);<br>
        </section>
		<footer>
			arsen@@fideinc.com
		</footer>
		<script src="/data/scripts/@array123[0].js"></script>
		<script src="/data/scripts/custom/@viewname;12.js"></script>
	</body>
</html>
