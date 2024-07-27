<div id="div_widget_image{{$recid_widget_image}}"  onclick="edit_widget_image({{$recid_widget_image}})">
<div class="widget p-20-10" item="jetp-ck8mj">
    <div>
        <section class="jetp-ngl4yv">
            <img src="{{url('storage/'.str_replace('public/','',$image_url))}}"   width="100%" >
        </section>
    </div>
    <div class="overlay" onclick="openInNewTab({{url('storage/'.str_replace('public/','',$image_url))}})"></div>
    <script>
        function openInNewTab(url) {
            window.open(url, '_blank');
        }
    </script>
</div>
</div>