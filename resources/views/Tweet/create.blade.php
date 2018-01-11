@extends('layout.main')

@section('body')
		<br>
		<div class="col-md-10 col-md-offset-6">
			<center><br><h3>Create New Tweet</h3></center>
			
				<form class="form-horizontal" action="/tweet" method="post">
					{{csrf_field()}}
  					<center>
  					<fieldset>
    					<div class="form-group">
      						<textarea class="form-control" name="body" id="Textarea" rows="3" maxlength="140"></textarea>
    					</div>    			
    				</fieldset>
    				<button type="submit" class="btn btn-primary">Aceptar</button>
    				<a href="/" class="btn btn-danger">Regresar</a>
    				</center>
    				<br>
				</form>
			</div>
@endsection