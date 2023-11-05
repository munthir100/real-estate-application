<form id="deleteForm-{{ $property->id }}" method="POST" action="{{ route('dashboard.properties.destroy', $property->id) }}">
    @method('DELETE')
    @csrf
</form>

<script>
    $(document).ready(function() {
        $('.delete-crud-entry').click(function(e) {
            e.preventDefault();
            var propertyId = $(this).data('property-id');

            var form = $('<form>', {
                'method': 'POST',
                'action': 'dashboard/properties/' + propertyId,
            });
            form.append('{{ csrf_field() }}');
            form.append('<input type="hidden" name="_method" value="DELETE">');
            form.appendTo('body').submit();
        });
    });
</script>
