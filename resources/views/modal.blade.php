<div {{ $attributes->merge(['class' => 'modal']) }} tabindex="-1" role="dialog">
  <div class="modal-dialog modal-{{ $size }} {{ $isCentered ? 'modal-dialog-centered' : '' }} {{ $scrollable ? 'modal-dialog-scrollable' : '' }} {{ $fullscreenClass() }}">
    <div class="modal-content">
      @if(!empty($title) || $closable)
        <div class="modal-header">
          <h5 class="modal-title">{{ $title }}</h5>
          @if($closable)
            <button type="button" class="close" data-dismiss="modal" aria-label="{!! __('Close', 'sage' )!!}">
              <span aria-hidden="true">&times;</span>
            </button>
          @endif
        </div>
      @endif
      <div class="modal-body">
        {!! $slot !!}
      </div>
      @if($footer)
        <div class="modal-footer">
          {!! $footer !!}
        </div>
      @endif
    </div>
  </div>
</div>


{{-- @lang('bs-component::button.close') --}}
{{--    --}}
