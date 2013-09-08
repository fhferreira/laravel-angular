@extends ('layout')

@section( 'header')
	{{  HTML::script('lib/angular/angular.min.js')  }}
	{{	HTML::script('js/app.js')  }}
	{{  HTML::script('js/controllers.js')  }}

  <style type="text/css">
  	li {
  		display:inline;
  	}
	.animate-leave {
		-webkit-transition: 1s linear all;
		-moz-transition: 1s linear all;
		-ms-transition: 1s linear all;
		-o-transition: 1s linear all;
		transition: 1s linear all;
		opacity: 1;	}

	.animate-leave.animate-leave-active{
		opacity: 0;
	}

	.animate-enter {
		-webkit-transition: 1s linear all;
		-moz-transition: 1s linear all;
		-ms-transition: 1s linear all;
		-o-transition: 1s linear all;
		transition: 1s linear all;
		opacity: 0;
	}

	.animate-enter.animate-enter-active {
		opacity: 1;
	}

	.animate-move {
		-webkit-transition: 1s linear all;
		-moz-transition: 1s linear all;
		-ms-transition: 1s linear all;
		-o-transition: 1s linear all;
		transition: 1s linear all;
		opacity: 0;
	}

	.animate-move.animate-move-active{
		opacity: 1;
	}

	
</style>
@stop

@section('main')
<div class="row">
	<main ng-app="Blog">
		<h1>Angular Blog</h1>
			<div ng-view></div>
	</main>
</div>
@stop
