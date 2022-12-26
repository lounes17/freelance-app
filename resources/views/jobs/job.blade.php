@extends('layouts.app')
@section('content')
   @foreach ($Jobs as $job)
       
  
<livewire:job :job="$job"/>

@endforeach 
@endsection