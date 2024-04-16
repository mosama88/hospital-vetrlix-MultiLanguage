<div class="modal fade" id="edit{{ $section->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{ trans('dashboard/sections_trans.add_section') }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dashboard.sections.update', $section->id) }}" autocomplete="off">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="recipient-name"
                            class="col-form-label">{{ trans('dashboard/sections_trans.section_name') }}</label>
                        <input type="hidden" name="id" value="{{ $section->id }}" class="form-control"
                            id="recipient-name">
                        <input type="text" name="name" value="{{ $section->name }}" class="form-control"
                            id="recipient-name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ trans('dashboard/sections_trans.close') }}</button>
                        <button type="submit"
                            class="btn btn-primary">{{ trans('dashboard/sections_trans.edit') }}</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>