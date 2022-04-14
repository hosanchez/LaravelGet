<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 4. Tablas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col" style="margin-top:100px">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>date</th>
							<th>temperatureC</th>
							<th>temperatureF</th>
							<th>summary</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $datos)
							<tr>
								<td>{{$datos->date}}</td>
								<td>{{$datos->temperatureC}}</td>
								<td>{{$datos->temperatureF}}</td>
								<td>{{$datos->summary}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>