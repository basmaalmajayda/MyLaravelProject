@if(session()->has('status'))
  @if(session('status'))
    <div style="color:#09AC60; padding:20px; background-color:#BEBEBE; font-weight:bold;" > Updated successfully </div>
  @else
    <div style="color:#D90B0B; padding:20px; background-color:#BEBEBE; font-weight:bold;" > Updated Failed </div>
  @endif
@endif