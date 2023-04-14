@if(Session::has('delete-modal'))
<div class="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm delete</h5>
            </div>
            <div class="modal-body">
                <p>{{ Session::get('delete-modal') }}</p>
            </div>
            <div class="modal-footer">
                <a href={{url()->full()}} type="button" class="btn btn-secondary">No</a>
                <form action="{{route('clients-delete', $client->order)}}" method="post">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <input type="hidden" value="1" name="confirm">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
</div>
@endif
