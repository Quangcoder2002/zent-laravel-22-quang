<div class="form-group">
    <label for="">{{$title}}</label>
    <textarea id="summernote">
        
    </textarea>
</div>
@push('stack-scripts')
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
  
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
@endpush