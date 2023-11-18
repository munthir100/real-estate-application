<div class="modal fade" id="modal-confirm-delete-{{ $property->id }}" tabindex="-1" role="dialog" aria-labelledby="modalConfirmDelete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('Confirm Deletion')}}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{__('Are you sure you want to delete this item?')}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Cancel')}}</button>
                <button type="button" class="btn btn-danger confirm-delete" data-property-id="{{ $property->id }}">{{__('Delete')}}</button>
            </div>
        </div>
    </div>
</div>

<form id="deleteForm-{{ $property->id }}" method="POST" action="{{ route('admin.properties.destroy', $property->id) }}">
    @method('DELETE')
    @csrf
</form>
<script>
    $(document).ready(function() {
        $('.confirm-delete').click(function() {
            var propertyId = $(this).data('property-id');
            $('#deleteForm-' + propertyId).submit(); // Submit the form
        });
    });
</script>