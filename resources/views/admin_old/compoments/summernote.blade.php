<div class="form-group">
    <label for="">{{$title}}</label>
    <textarea id="{{$id}}" name="{{$name}}" style="min-height: 200px">
            {{$content}}
    </textarea>
</div>
@push('stack-scripts')
<script>
    $(function () {
      // Summernote
      $('#{{$id}}').summernote()
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
@endpush