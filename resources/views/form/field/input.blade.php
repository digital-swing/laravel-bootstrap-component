<input
  type="{{ $type }}"
  name="{{ $name }}"
  {{-- value="{{ old($cleanName,$value) }}" --}}
  class="form-control {{ !empty($size) ? 'form-control-'.$size : '' }}"
  {{-- class="form-control {{ !empty($size) ? 'form-control-'.$size : '' }} @error($cleanName) is-invalid @enderror" --}}
  id="{{ $cleanName.'Field' }}"
  @if($placeholder) placeholder="{{ $placeholder }}" @endif
  @if($help) aria-describedby="{{ $cleanName.'FieldHelp' }}" @endif
  {{ $isReadonly ? 'readonly' : '' }}
  {{ $isDisabled ? 'disabled' : ''}}
  {{ $isRequired ? 'required' : ''}}
  @if($type=='number') step="{{ $step }}" @endif
  @if($type=='number' && !is_null($min)) min="{{ $min }}" @endif
  @if($type=='number' && !is_null($max)) max="{{ $max }}" @endif
/>

{{--
  REMARQUES :

    - {{ old($cleanName,$value) }}
          Retourne une erreur "Call to undefined function old()"

    - @error($cleanName) is-invalid @enderror"
          Retourne une erreur "Call to a member function getBag()"
          A mon avis c'est "@error / @enderror" qui est la cause de l'erreur
--}}
