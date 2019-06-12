@extends('layouts.app')

@section('content')

    {{ $page->title }}

    {{--Paste it to html--}}
    @if($page->images)
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="popup-gallery">
                @foreach($page->images as $img)
                    <a href="{{ $img }}"><img src="{{ $img }}" width="75" height="75"></a>
                @endforeach
            </div>
        </div>
    @endif

@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
@endpush


@if($page->images)

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.popup-gallery').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    tLoading: 'Loading image #%curr%...',
                    mainClass: 'mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                        titleSrc: function(item) {
                            return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                        }
                    }
                });
            });
        </script>
    @endpush
@endif
