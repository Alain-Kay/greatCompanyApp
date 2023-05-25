@if ($message = Session::get('success'))
<div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif 
    
@if ($message = Session::get('error'))
<div id="flash-message" class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
     
@if ($message = Session::get('warning'))
<div id="flash-message" class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
     
@if ($message = Session::get('info'))
<div id="flash-message" class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    
@if ($errors->any())
<div id="flash-message" class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong >SVP lisez toutes les erreurs</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<style>
  #flash-message {
    width: 650px; 
    margin: 0 auto; 
  }
  </style>

  <script>
    setTimeout(function() {
      document.getElementById('flash-message').remove();
    }, 10000);
  </script>
  
