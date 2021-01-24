<form class="form" method="POST" action="{{ $model->exists ? route('question.update', $model->id) : route('question.store') }}" files=true>
    {{ csrf_field() }} {{ method_field($model->exists ? 'PUT' : 'POST') }}
    <div class="modal-header">
        <h5 class="modal-title" id="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            &times;
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label for="" class="control-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{$model->id}}" required>
        </div>
        <div class="form-group">
            <label for="" class="control-label">Pertanyaan</label>
            <input type="text" class="form-control" id="question" name="question" value="{{$model->question}}" required>
        </div>
        <div class="form-group">
            <label for="" class="control-label">Yes</label>
            <input type="text" class="form-control" id="yes" name="yes" value="{{$model->yes}}" required>
        </div>
        <div class="form-group">
            <label for="" class="control-label">No</label>
            <input type="text" class="form-control" id="no" name="no" value="{{$model->no}}" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-close"></button>
        <button type="submit" class="btn btn-primary" id="modal-save"></button>
    </div>
</form>