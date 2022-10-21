@props(['name', 'type' => 'text','required' => 'required','value'=>''])
<x-form-input-wrapper>
    <x-form.label :name='$name' />
    <input {{$required}} type="{{$type}}" value="{{old($name,$value)}}"  name="{{$name}}" class="form-control" id="{{$name}}" >
    <x-error :name="$name"/>
</x-form-input-wrapper>