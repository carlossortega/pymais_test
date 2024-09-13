@if (isset($lesson_details->lesson_type))
    @if ($lesson_details->lesson_type == 'text')
        <div class="text_show">
            {!! removeScripts(htmlspecialchars_decode($lesson_details->description)) !!}
        </div>
    @elseif ($lesson_details->lesson_type == 'video-url')
        <div class="plyr__video-embed " id="player">
            <iframe src="{{ $lesson_details->lesson_src }}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe>
        </div>
        @include('course_player.player_config')
    @elseif($lesson_details->lesson_type == 'system-video')
        @php
            $watermark_type = get_player_settings('watermark_type');
            $lesson_video = $lesson_details->lesson_src;
            if ($watermark_type == 'ffmpeg') {
                $origin = dirname($lesson_details->lesson_src);
                $dir = $origin . '/watermark';
                $file = str_replace($origin, '', $lesson_details->lesson_src);
                $lesson_video = "{$dir}{$file}";
            }
        @endphp
        <div class=" bd-r-10 mb-16 position-relative bg-light custom-system-video">
            <video id="player" playsinline controls>
                <source src="{{ asset('assets/upload/lesson_file/videos/' . $lesson_details->lesson_src) }}" type="video/mp4">
            </video>
            @include('course_player.player_config')
        </div>
    @elseif($lesson_details->lesson_type == 'image')
        @php
            $img = asset('assets/upload/lesson_file/attachment/' . $lesson_details->attachment);
        @endphp
        <img width="100%" class="max-w-auto" height="auto" src="{{ $img }}" />
    @elseif($lesson_details->lesson_type == 'vimeo-url' && $lesson_details->video_type == 'vimeo')
        @php
            $video_url = $lesson_details->lesson_src;
            $video_id = explode('https://vimeo.com/', $video_url);
            $video_id = str_replace('https://vimeo.com/', '', $video_url);
        @endphp

        <iframe height="500" src="https://player.vimeo.com/video/{{ $video_id }}?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allowtransparency allow="autoplay"></iframe>
        @include('course_player.player_config')
    @elseif($lesson_details->lesson_type == 'google_drive')
        @php
            $video_url = $lesson_details->lesson_src;
            $url_array_1 = explode('/', $video_url . '/');
            $url_array_2 = explode('=', $video_url);
            $video_id = null;
            if ($url_array_1[4] == 'd'):
                $video_id = $url_array_1[5];
            else:
                $video_id = $url_array_2[1];
            endif;
        @endphp
        <video width="100%" height="680" id="player" playsinline controls>
            <source class="remove_video_src" src="https://www.googleapis.com/drive/v3/files/{{ $video_id }}?alt=media&key=api-key-for-youtube-and-google-drive" type="video/mp4">
        </video>

        @include('course_player.player_config')
    @elseif($lesson_details->lesson_type == 'html5')
        <video width="100%" height="680" id="player" playsinline controls>
            <source class="remove_video_src" src="{{ $lesson_details->lesson_src }}" type="video/mp4">
        </video>

        @include('course_player.player_config')
    @elseif($lesson_details->lesson_type == 'document_type')
        @if ($lesson_details->attachment_type == 'pdf')
            <iframe class="embed-responsive-item" width="100%" src="{{ asset('assets/upload/lesson_file/attachment/' . $lesson_details->attachment) }}" allowfullscreen></iframe>
        @elseif($lesson_details->attachment_type == 'doc')
            <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ asset('assets/upload/lesson_file/attachment/' . $lesson_details->attachment) }}" width='100%' frameborder='0'></iframe>
        @elseif($lesson_details->attachment_type == 'txt')
            <iframe src="{{ asset('assets/upload/lesson_file/attachment/' . $lesson_details->attachment) }}" width='100%' frameborder='0'></iframe>
        @endif
    @elseif($lesson_details->lesson_type == 'quiz')
        @include('course_player.quiz.index')
    @else
        <iframe class="embed-responsive-item" width="100%" src="{{ $lesson_details->lesson_src }}" allowfullscreen></iframe>

    @endif
@else
@endif
