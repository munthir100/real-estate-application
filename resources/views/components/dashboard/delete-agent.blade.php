<div class="modal fade" id="modal-confirm-delete-{{ $agent->id }}" tabindex="-1" role="dialog" aria-labelledby="modalConfirmDelete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Deletion</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this agent?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger confirm-delete" data-agent-id="{{ $agent->id }}" data-delete-route="{{ route('agents.destroy', $agent->id) }}">Delete</button>
            </div>
        </div>
    </div>
</div>

<form id="deleteForm-{{ $agent->id }}" method="POST" action="{{ route('agents.destroy', $agent->id) }}">
    @method('DELETE')
    @csrf
</form>

<script>
    $(document).ready(function() {
        $('.confirm-delete').click(function() {
            var agentId = $(this).data('agent-id');
            var deleteRoute = $(this).data('delete-route');
            var form = $('#deleteForm-' + agentId);
            
            // Set the action attribute of the form
            form.attr('action', deleteRoute);
            
            // Manually add the CSRF token to the form data
            form.append('<input type="hidden" name="_token" value="{{ csrf_token() }}" />');
            form.append('<input type="hidden" name="_method" value="DELETE" />');
            // Submit the form
            form.submit();
        });
    });
</script>
