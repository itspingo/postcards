<div id="div_widget_video{{$recid_widget_video}}"  >
<div class="widget p-20-10" item="jetp-ck8mj">
    <div>
        <section class="jetp-ngl4yv">
            <iframe src="{{$video_link}}"
                frameborder="0" allowfullscreen="true" width="100%" height="100%">
            </iframe>
        </section>
    </div>
    <!-- <div class="overlay" onclick="openInNewTab('{{$video_link}}')"></div> -->
     <div class="overlay"  onclick="edit_widget_video({{$recid_widget_video}})"></div>
    <script>
        function openInNewTab(url) {
            window.open(url, '_blank');
        }
    </script>
</div>
</div>