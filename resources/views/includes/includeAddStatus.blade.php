@if(session()->has('status'))
  @if(session('status'))
    <div style="color:#09AC60; padding:20px; background-color:#BEBEBE; font-weight:bold;" > Added successfully </div>
  @else
    <div style="color:#D90B0B; padding:20px; background-color:#BEBEBE; font-weight:bold;" > Added Failed </div>
  @endif
@endif