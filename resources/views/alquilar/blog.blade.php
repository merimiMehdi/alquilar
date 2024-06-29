@include('elements.header')
<div class="container content">
  <div class="spacer">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <h2 class="text-center mt-3">Para alquilar, llámame a este número:</h2>
        <p class="contact-number"><i class="fas fa-phone-alt"></i> +34 635 36 71 42</p>
        <div class="video-container video-player">
          <video id="my-video" class="video-js" controls preload="auto" data-setup="{}">
            <source src="images/blog/videoFinal.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
</div>
@include('elements.footer')