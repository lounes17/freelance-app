
<div x-data="{ open: false }" @flash-message.window="open = true; setTimeout(()=>open=false,10000)" >
  <div x-show="open" x-cloak>
    <div  style=" {{$this->type ? $this->colors[$type] :  ''}} padding: 8px;
      margin: 4px;
      border-radius: 10px;" role="alert" >
      <span style="font-weight: bold;" x-show="open" x-cloak>{{$type}}
        !</span> {{$message}} 
    </div>

  </div>
 

</div>

