<div {{ $attributes->merge(['class' => 'modal modal-confirm fade']) }} tabindex="-1" @if($isStatic) data-backdrop="static" @endif>
  <div class="modal-dialog modal-{{ $size }} {{ $isCentered ? 'modal-dialog-centered' : '' }} {{ $scrollable ? 'modal-dialog-scrollable' : '' }} {{ $fullscreenClass() }}">
    <div class="modal-content">

      <div class="modal-header">
        @if($icon)
          <i class="icon {{ $icon }} bg-{{ $color }} text-white"></i>
        @endif
        @if($title)
          <h5 class="modal-title text-{{ $color }}">{{ $title }}</h5>
        @endif
      </div>

      <div class="modal-body text-center">


          <x-bs-form-template action="modal-confirm">
            {!! $slot !!}
            <button type="button" class="btn {{ $btnCancel['class'] }}" data-dismiss="modal" aria-label="{{ $btnCancel['label'] }}">
              {!! $btnCancel['value'] !!}
            </button>
            <button type="submit" class="btn {{ $btnConfirm['class'] }}" aria-label="{{ $btnConfirm['label'] }}">
              <x-bs-loading class="d-none" type="border" size="sm" color="light"/>
              {!! $btnConfirm['value'] !!}
            </button>
          </x-bs-form-template>

      </div>

      @if($footer)
        <div class="modal-footer">
          {!! $footer !!}
        </div>
      @endif
    </div>
  </div>
</div>
