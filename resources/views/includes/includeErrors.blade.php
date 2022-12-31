@foreach($errors->all() as $message)
  <p style="color:#D90B0B; padding:0px; background-color:#BEBEBE; font-weight:normal;" > {{$message}} </p>
  <hr>
@endforeach